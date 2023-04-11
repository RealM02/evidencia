<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_details;

class order_detailsController extends Controller
{
    public function detail(){
        $page_title="ORDER DETAILS";
        //select * from clients
            $details=orders_details::all();
            return view('order_details', compact('page_title','details'));
        }
}
