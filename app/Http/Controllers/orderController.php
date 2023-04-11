<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class orderController extends Controller
{
    public function orders(){
        $page_title="ORDERS";
        //select * from clients
            $orders=order::all();
            return view('order', compact('page_title','orders'));
        }
}
