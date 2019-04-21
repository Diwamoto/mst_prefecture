<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefController extends Controller
{
    public function index(){
        return view('list');
    }
    public function search(Request $request){
        return view('list',$request);
    }
}