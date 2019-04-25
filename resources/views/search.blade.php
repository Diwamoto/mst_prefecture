@extends('common.layout')
@section('title','地域マスタ一覧')
@section('content')
<div class="container">
    <h4>地域マスタ一覧</h4>
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{action('PrefController@search')}}" method="POST" id="search">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-lg-1">地域コード</div>
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" class="form-control input-sm" /></div>
                    <div class="col-lg-1">地域名</div>
                    <div class="col-lg-5"><input type="text" name="prefecture_name"  class="form-control input-sm" /></div>
                    <div class="col-lg-3"><button type="submit" class="btn btn-primary btn-sm" form="search">検索</button></div>
                </div>
            </form>
        </div>
    </div>
    <p>検索結果</p>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <td>地域コード</td>
                        <td>地域名</td>
                        <td>更新日時</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                
                @foreach ($data as $value)
                <tr>
                    <td>{{ $value->prefecture_cd }}</td>
                    <td>{{ $value->prefecture_name }}</td>
                    <td>{{ $value->insert_date }}</td>
                    <td><button class="btn btn-default btn-xs">追加</button></td>
                    <td><button class="btn btn-default btn-xs">削除</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div> 
@endsection