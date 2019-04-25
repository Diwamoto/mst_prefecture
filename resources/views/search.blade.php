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
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" class="form-control" /></div>
                    <div class="col-lg-1">地域名</div>
                    <div class="col-lg-5"><input type="text" name="prefecture_name"  class="form-control" /></div>
                    <div class="col-lg-3"><button type="submit" class="btn btn-default btn-wide" form="search">検索</button></div>
                </div>
            </form>
        </div>
    </div>
    検索結果
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-striped">
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
                    <td><button class="btn btn-default">追加</button></td>
                    <td><button class="btn btn-default">削除</button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <nav>
            <ul class="pagination-plain">
                <li class="previous">
                    <a href="$data->previousPageUrl()">前</a>
                </li>
                @for ($i = 0; $i < $data->total()/$data->perPage(); $i++)
                    <a href="$data->url($i)">{{$i}}</a>
                @endfor
                <li class="next">
                    <a href="$data->nextPageUrl()">次</a>
                </li>
            </ul>
        </nav>
        </div>
    </div>
</div> 
@endsection