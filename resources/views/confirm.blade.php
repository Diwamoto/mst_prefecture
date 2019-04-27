@extends('common.layout')
@section('title','地域マスタ登録')
@section('content')
<div class="container">
    @if($arr_request['process'] == 'add')
        <h4>地域マスタ登録確認</h4>
    @else
        <h4>地域マスタ削除確認</h4>
    @endif
        <div class="card">
            <div class="card-body">
                <form action="{{action('PrefController@complete')}}" method="POST" id="confirm">
                    <div class="row">
                        <div class="col-lg-2">地域コード</div>
                        <div class="col-lg-2">{{$arr_request['prefecture_cd']}}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">地域名</div>
                        <div class="col-lg-4">{{$arr_request['prefecture_name']}}</div> 
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="prefecture_cd" value="{{$arr_request['prefecture_cd']}}">
                    <input type="hidden" name="prefecture_name" value="{{$arr_request['prefecture_name']}}">
                    <input type="hidden" name="process" value="{{$arr_request['process']}}">
                    <input type="hidden" name="url" value="{{$arr_request['url']}}">
                    @if($arr_request['process'] == 'add')
                        <div class="col-lg-12"><button type="submit" class="btn btn-primary btn-sm float-right" form="confirm">登録</button></div>
                    @else
                        <div class="col-lg-12"><button type="submit" class="btn btn-primary btn-sm float-right" form="confirm">削除</button></div>
                    @endif
                    
                </div>
            </div>
        </div>
        <button class="btn btn-primary" onclick="location.href='{{url()->previous()}}'">戻る</button>
    </div> 
@endsection