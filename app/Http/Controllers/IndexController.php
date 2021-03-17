<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class IndexController extends Controller
{
    public function index()
    {
        return view('main.main');
    }
    public function allProducts()
    {
        $categories = DB::table('proposals')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->distinct()
            ->get('category_name');
        $proposals = DB::table('proposals')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->get();
        return view('products', ['products' => $proposals, 'categories' => $categories]);
    }

    public function showProductsByCategory($category)
    {
        $proposals = Proposals::query()
            ->join('categories', 'categories.id', '=', 'category_id')
            ->where('category_name' , '=', $category)
            ->get();
        return view('productsShow', ['proposals' => $proposals]);
    }

}
