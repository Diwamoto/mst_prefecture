@extends('common.layout')
@section('title','地域マスタ一覧')
@section('content')
<div class="container">
    <h4>地域マスタ一覧</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{action('PrefController@search')}}" method="GET" id="search">
                <div class="form-row">
                    <div class="col-lg-2">地域コード</div>
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" value="" class="form-control input-sm" /></div>
                    <div class="col-lg-1">地域名</div>
                    <div class="col-lg-5"><input type="text" name="prefecture_name" value="" class="form-control input-sm" /></div>
                    <div class="col-lg-1"><button type="submit" class="btn btn-primary btn-sm" form="search">検索</button></div>
                </div>
            </form>
        </div>
        
    </div>
</div> 
@endsection