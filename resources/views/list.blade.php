@extends('common.layout')
@section('title','地域マスタ一覧')
@section('content')
<div class="container">
    <h3>地域マスタ一覧</h3>
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ url('/search')}}" method="POST" id="search">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-lg-1">地域コード</div>
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" placeholder="" class="form-control" /></div>
                    <div class="col-lg-1">地域名</div>
                    <div class="col-lg-5"><input type="text" name="prefecture_name" placeholder="" class="form-control" /></div>
                    <div class="col-lg-3"><button type="submit" class="btn btn-default btn-wide" form="search">検索</button></div>
                </div>
            </form>
        </div>
        
    </div>
    @if (isset($arr_request))
    検索結果
    <div class="panel panel-default">
        <div class="panel-body">
            {{var_dump($arr_request)}}
        </div>
    </div>
    @endif
</div> 
@endsection