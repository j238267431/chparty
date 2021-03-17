<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use App\Service\ProposalService;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    public function index()
    {
        return view('proposal', ['url' => null]);
    }

    public function store(Request $request)
    {
        $service = new ProposalService($request);
        $proposal = $service->getProposal();
       if($proposal){
           return redirect('/home')->with('success', 'предложение успешно создано');
       }
        return redirect('/home')->with('error', 'предложение не создано');

    }
    public function imageStore(Request $request)
    {
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $url = $file->storeAs('proposals/'.Auth::id(), $fileName, 'uploads');
        return redirect()->back()->with('url', $url);
    }
}
