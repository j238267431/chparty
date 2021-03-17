<?php


namespace App\Service;


use App\Models\Proposals;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProposalService
{
    protected $request;
    protected object $proposal;
    protected string $imageUrl;
    protected int $proposalId;

    /**
     * ProposalService constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }


    public function getProposal()
    {
        $this->createRecord();
        $this->movePicture();
        return Proposals::find($this->proposalId)
            ->update(['images' => $this->imageUrl]);
    }

    public function createRecord()
    {
        $this->proposal = Proposals::query()->create([
            'description' => $this->request->description,
            'price' => $this->request->price,
            'category_id' => $this->request->category,
            'user_id' => Auth::id(),
            'images' => $this->request->image,
        ]);
    }
    public function movePicture()
    {
        $this->proposalId = $this->proposal->id;
        $imageName = preg_split('/\//', $this->proposal->images)[2];
        $this->imageUrl = 'products/proposalId' . $this->proposalId . '/' . $imageName;
        Storage::disk('uploads')->move($this->proposal->images, $this->imageUrl);
    }
}

