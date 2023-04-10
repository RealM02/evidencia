<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class staffController extends Controller
{
    public function staff(){
        $page_title="STAFF";
        //select * from staff 
        $staff=staff::all();
        return view('staff', compact('page_title','staff'));
    }
}
