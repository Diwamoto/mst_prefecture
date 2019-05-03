@extends('common.layout')
@section('title','地域マスタ登録')
@section('content')
<div class="container">
    @if(!isset($arr_request['process']) || $arr_request['process'] == 'add')
        <h4>地域マスタ登録</h4>
    @else
        <h4>地域マスタ更新</h4>
    @endif
    <div class="card">
        <div class="card-body">
            @if(isset($errors))
                @foreach ($errors as $err)
                    <div class="text-danger">{{$err}}</div>
                @endforeach
            @endif
            <form action="{{ action('PrefController@confirm') }}" method="POST" id="edit">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-2">地域コード</div>
                    <div class="col-lg-2">
                        @if(!isset($arr_request['process']) || $arr_request['process'] == 'add')
                            <input type="text" name="prefecture_cd" value="" class="form-control input-sm" />
                            <input type="hidden" name="process" value="add">
                        @else
                            <input type="text" name="prefecture_cd" value="{{ $arr_request['prefecture_cd'] }}" class="form-control input-sm" readonly/>
                            <input type="hidden" name="process" value="update">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">地域名</div>
                    <div class="col-lg-4"><input type="text" name="prefecture_name" value="" class="form-control input-sm" /></div> 
                </div>
                <input type="hidden" name="url" value="{{ url()->previous() }}">
                <div class="col-lg-12"><button type="submit" class="btn btn-primary btn-sm float-right" form="edit">登録</button></div>
            </form>
        </div>
    </div>
    <button class="btn btn-primary" onclick="location.href='{{ $arr_request['url'] }}'">戻る</button>
</div> 
@endsection