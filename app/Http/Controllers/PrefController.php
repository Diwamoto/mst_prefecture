<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mst_prefecture;

class PrefController extends Controller
{
    public function index(){
        return view('list');
    }

    public function search(Request $request){
        $arr_request=$request->input();

        if(!isset($arr_request['prefecture_cd']) && isset($arr_request['prefecture_cd'])){
            $data=mst_prefecture::where('prefecture_name','like',$arr_request['prefecture_name'])
            ->paginate(10);

        }else if(isset($arr_request['prefecture_cd']) && !isset($arr_request['prefecture_name'])){
            $data=mst_prefecture::where('prefecture_cd','=',$arr_request['prefecture_cd'])
            ->paginate(10);

        }else if(!isset($arr_request['prefecture_cd']) && !isset($arr_request['prefecture_name'])){
            $data=mst_prefecture::paginate(10);
        }else{
            $data=mst_prefecture::where('prefecture_cd','=',$arr_request['prefecture_cd'])
            ->where('prefecture_name','like',$arr_request['prefecture_name'])
            ->paginate(10);
        }
        return view('search',compact('data'));
    }
}