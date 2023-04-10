<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    public function product(){
        $page_title="PRODUCTS";
        //select * from clients
            $products=products::all();
            return view('products', compact('page_title','products'));
        }
}
