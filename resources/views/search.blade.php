@extends('common.layout')
@section('title','検索結果')
@section('content')
<div class="container">
    <h4>地域マスタ一覧</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ action('PrefController@search') }}" method="GET" id="search">
                <div class="form-row">
                    <div class="col-lg-2">地域コード</div>
                    <div class="col-lg-2"><input type="text" name="prefecture_cd" class="form-control input-sm" value="{{ $arr_request['prefecture_cd'] }}"/></div>
                    <div class="col-lg-1">地域名</div>
                    <div class="col-lg-5"><input type="text" name="prefecture_name"  class="form-control input-sm" value="{{ $arr_request['prefecture_name'] }}"/></div>
                    <div class="col-lg-1"><button type="submit" class="btn btn-primary btn-sm" form="search">検索</button></div>
                </div>
            </form>
        </div>
    </div>
    @if($data->total() > 0)
        <p>全{{ count($db) }}中{{ $data->firstItem() }}~{{ $data->lastItem() }}件表示中</p>
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
                        <td>
                            <form action="{{ action('PrefController@edit') }}" method="POST" id="update">
                                {{ csrf_field() }}
                                <input type="hidden" name="prefecture_cd" value="{{ $value->prefecture_cd }}">
                                <input type="hidden" name="prefecture_name" value="{{ $value->prefecture_name }}">
                                <input type="hidden" name="process" value="update">
                                <input type="hidden" name="url" value="{{ url()->full() }}">
                                <button class="btn btn-primary btn-xs" name="btnUpdate" type="submit" form="update">更新</button>
                            </form>
                        <td>
                            <form action="{{ action('PrefController@confirm') }}" method="POST" id="delete">
                                {{ csrf_field() }}
                                <input type="hidden" name="prefecture_cd" value="{{ $value->prefecture_cd }}">
                                <input type="hidden" name="prefecture_name" value="{{ $value->prefecture_name }}">
                                <input type="hidden" name="process" value="delete">
                                <input type="hidden" name="url" value="{{ url()->full() }}">
                                <button class="btn btn-danger btn-xs" name="btnDelete" type="submit" form="delete">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-10">
                @if ($data->hasPages())
                    <ul class="pagination pagination-success" role="navigation">
                        {{-- Previous Page Link --}}
                        @if (!$data->onFirstPage())
                            <a class="btn btn-success previous" href="{{ $data->previousPageUrl() }}&{{ http_build_query($query) }}" rel="prev" aria-label="@lang('pagination.previous')">前のページ</a>
                        @endif
                        {{-- Next Page Link --}}
                        @if ($data->hasMorePages())
                            <a class="btn btn-success next" href="{{ $data->nextPageUrl() }}&{{ http_build_query($query) }}" rel="next" aria-label="@lang('pagination.next')">次のページ</a>
                        @endif
                    </ul>
                @endif
            </div>
            <div class="col-lg-2">
                <form action="{{ action('PrefController@edit') }}" method="POST" id="edit">
                        {{ csrf_field() }}
                        <input type="hidden" name="process" value="add">
                        <input type="hidden" name="url" value="{{ url()->full() }}">
                        <button class="btn btn-primary float-right" name="btnInsert" type="submit" form="edit">追加</button>
                </form>
            </div>
        </div>
    @else
        <span class="text-danger">表示できるデータが存在しません。</span>
    @endif
</div>
@endsection