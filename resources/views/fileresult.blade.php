@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/file">戻る</a><br>
            <h1>ファイル操作の結果</h1>
            <hr>
            {{ $contents ?? '' }}
        </div>
    </div>
</div>
@endsection
