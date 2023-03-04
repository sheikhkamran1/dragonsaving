<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $download = Download::all();
        return view('admin.download.index',compact('download'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.download.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $download = new Download();
        $download->subject = $request->subject;
        uploadImage($request,$download,'file');
        $download->save();
        return redirect()->route('download.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $download = Download::find($id);
        return view('admin.download.edit',compact('download'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $download = Download::find($id);
        $download->subject = $request->subject;
        uploadImage($request,$download,'file');
        $download->update();
        return redirect()->route('download.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $download = Download::find($id);
        $download->delete();
        return redirect()->route('download.index');
    }
}
