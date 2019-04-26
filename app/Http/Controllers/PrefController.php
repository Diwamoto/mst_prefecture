<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mst_prefecture as Pref;

class PrefController extends Controller
{
    public function index(Request $request){
        return view('list');
    }

    public function update(Request $request){
        return "kousin";
    }

    public function delete(Request $request){
        return "delete";
    }

    public function add(Request $request){
        return "adding";
    }

    public function search(Request $request){
        $arr_request=$request->input();
        $db=Pref::get();
        if(!isset($arr_request['prefecture_cd']) && isset($arr_request['prefecture_cd'])){
            $data=Pref::where('prefecture_name','like',$arr_request['prefecture_name'])
            ->paginate(10);
            $query=array(
                'prefecture_cd' => '',
                'prefecture_name' => $request->input('prefecture_name')
            );
        }else if(isset($arr_request['prefecture_cd']) && !isset($arr_request['prefecture_name'])){
            $data=Pref::where('prefecture_cd','=',$arr_request['prefecture_cd'])
            ->paginate(10);
            $query=array(
                'prefecture_cd' => $request->input('prefecture_cd'),
                'prefecture_name' => ''
            );
        }else if(!isset($arr_request['prefecture_cd']) && !isset($arr_request['prefecture_name'])){
            $data=Pref::paginate(10);
            $query=array(
                'prefecture_cd' => '',
                'prefecture_name' => ''
            );
        }else{
            $data=Pref::where('prefecture_cd','=',$arr_request['prefecture_cd'])
            ->where('prefecture_name','like',$arr_request['prefecture_name'])
            ->paginate(10);
            $query=array(
                'prefecture_cd' => $request->input('prefecture_cd'),
                'prefecture_name' => $request->input('prefecture_name')
            );
        }
        return view('search',compact('data','request','db','query'));
    }
}