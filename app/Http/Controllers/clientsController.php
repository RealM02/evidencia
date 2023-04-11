<?php

namespace App\Http\Controllers;
use App\Models\clients;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function index(){
        $page_title="CLIENTS";
        //select * from clients
            $clients=clients::all();
            return view('clients', compact('page_title','clients'));
        }
}
