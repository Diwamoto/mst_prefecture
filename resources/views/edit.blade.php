@extends('common.layout')
@section('title','地域マスタ登録')
@section('content')
<div class="container">
    <h4>地域マスタ登録</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{action('PrefController@confirm')}}" method="POST" id="edit">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2">地域コード</div>
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" value="" class="form-control input-sm" /></div>
                </div>
                <div class="row">
                    <div class="col-lg-2">地域名</div>
                    <div class="col-lg-4"><input type="text" name="prefecture_name" value="" class="form-control input-sm" /></div> 
                </div>
                <input type="hidden" name="process" value="add">
                <input type="hidden" name="url" value="{{url()->previous()}}">
                <div class="col-lg-12"><button type="submit" class="btn btn-primary btn-sm float-right" form="edit">登録</button></div>
            </form>
        </div>
    </div>
    <button class="btn btn-primary" onclick="location.href='{{url()->previous()}}'">戻る</button>
</div> 
@endsection