<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $treni= Train::whereDate("orario_di_partenza","2023-01-24")->get();
        return view('index',compact("treni"));
    }
}
