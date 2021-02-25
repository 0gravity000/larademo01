@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home">戻る</a><br>
            @foreach($tag_htmls as $tag_html)
                {{ $tag_html }}
            @endforeach
        </div>
    </div>
</div>
@endsection
