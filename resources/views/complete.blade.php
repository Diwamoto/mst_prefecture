@extends('common.layout')
@section('title','地域マスタ登録')
@section('content')
<div class="container">
    @if($arr_request['process'] == 'add')
        <h4>地域マスタ登録完了</h4>
    @elseif($arr_request['process'] == 'delete')
        <h4>地域マスタ削除完了</h4>
    @elseif($arr_request['process'] == 'update')
        <h4>地域マスタ更新完了</h4>
    @endif
        <div class="card">
            <div class="card-body">
                @if($arr_request['process'] == 'add')
                    <p>地域マスタの登録が完了しました</p>
                @elseif($arr_request['process'] == 'delete')
                    <p>地域マスタの削除が完了しました</p>
                @elseif($arr_request['process'] == 'update')
                    <p>地域マスタの更新が完了しました</p>
                @endif
                <div class="row">
                    <div class="col-lg-2">地域コード</div>
                    <div class="col-lg-2">{{$arr_request['prefecture_cd']}}</div>
                </div>
                <div class="row">
                    <div class="col-lg-2">地域名</div>
                    <div class="col-lg-4">{{$arr_request['prefecture_name']}}</div> 
                </div>
            </div>
        </div>
        <button class="btn btn-primary" onclick="location.href='{{$arr_request['url']}}'">戻る</button>
</div> 
@endsection