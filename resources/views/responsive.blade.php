@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home">ホームに戻る</a><br>
            <h1>レスポンシブWebの実験</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <section class="side col-md-4">
            <h2>サイドコンテンツ</h2>　
            <p>サイドコンテンツの内容</p>
            <h2>サイドリスト</h2>
            <ul>
                <li>メニュー</li>
                <li>メニュー</li>
                <li>メニュー</li>
                <li>メニュー</li>
            </ul>
        </section>
        <section class="main col-md-8">
            <h1>メインコンテンツ</h1>
            <div class="archive">
                <div>
                    <img src="no-image.gif" alt="no-img">
                    <p>見出しや文章</p>
                </div>
                <div>
                    <img src="no-image.gif" alt="no-img">
                    <p>見出しや文章</p>
                </div>
                <div>
                    <img src="no-image.gif" alt="no-img">
                    <p>見出しや文章</p>
                </div>
                <div>
                    <img src="no-image.gif" alt="no-img">
                    <p>見出しや文章</p>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="container">
    div class="container"
</div>

<div class="container-fluid">
    class="container-fluid"
</div>

<div class="container-sm">100% wide until small breakpoint</div>
<div class="container-md">100% wide until medium breakpoint</div>
<div class="container-lg">100% wide until large breakpoint</div>
<div class="container-xl">100% wide until extra large breakpoint</div>

@endsection


