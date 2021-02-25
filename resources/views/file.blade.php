@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home">ホームに戻る</a><br>
            <h1>ファイル操作の実験</h1>
            <hr>
            <h2>ファイルの作成</h2>
            <form method="POST" action="/file-create">
                @csrf
                <div class="mb-3">
                    <label for="InputFileName1" class="form-label">ファイル名</label>
                    <input type="text" class="form-control" name="InputFileName1">
                    <div id="fileNameHelp1" class="form-text">ファイル名を指定してください。</div>
                </div>
                <div class="mb-3">
                    <label for="InputFileContents1" class="form-label">ファイルの内容</label>
                    <input type="text" class="form-control" name="InputFilecontents1">
                    <div id="fileContentsHelp1" class="form-text">ファイルに書き込む内容を指定してください。</div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="local">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Local
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"  value="public" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      public
                    </label>
                  </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
            <hr>
            <h2>ファイルのダウンロード</h2>
            <form method="POST" action="/file-download">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">ダウンロードするファイル名を指定してください。</label>
                    <input class="form-control" type="text" name="formFile1">
                </div>
                <button type="submit" class="btn btn-primary">ダウンロード</button>
            </form>
        </div>
    </div>
</div>
@endsection
