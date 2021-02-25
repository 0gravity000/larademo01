<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request);
        //dd($request->InputFileName1);

        if($request->flexRadioDefault == "public") {    //public
            Storage::disk('public')->put($request->InputFileName1, $request->InputFilecontents1);
        } elseif($request->flexRadioDefault == "local") {  //local
            Storage::disk('local')->put($request->InputFileName1, $request->InputFilecontents1);
        } else {    //上記以外は強制的にpublicに作成する
            Storage::disk('public')->put($request->InputFileName1, $request->InputFilecontents1);
        }

        return redirect('file');
    }

    public function download(Request $request)
    {
        //
        //dd($request);

        /*
        ドライバの指定がない場合は、
        Storage::disk('local')を指定したとみなされ
        \storage\app 配下の指定ファイルをダウンロードする
        */
        return Storage::download($request->downloadFile1);
    }

    public function get(Request $request)
    {
        //
        //dd($request);

        $contents = Storage::get($request->getFile1);
        return view('fileresult', compact('contents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->file('uploadFile1'));

        $path = Storage::putFile('imgs', $request->file('uploadFile1'));
        return view('fileresult', compact('path'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
