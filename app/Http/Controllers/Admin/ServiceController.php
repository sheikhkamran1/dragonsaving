<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scheme;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schemes = Scheme::all();
        return view('admin.service.create', compact('schemes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'scheme_id' => 'required',
        ]);
        // dd($request->all());
        $service = new Service();
        $service->title = $request->title;
        $service->content = $request->content;
        $service->scheme_id = $request->scheme_id;
        $service->slug = Str::slug($request->title);
        $service->meta_word = $request->meta_word;
        $service->meta_description = $request->meta_description;
        uploadImage($request, $service,'featured_image');
        $service->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return view('admin.service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        $scheme = Scheme::all();
        return view('admin.service.edit',compact('service','scheme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'scheme_id' => 'required',
        ]);
        $service = Service::find($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->name);
        $service->content = $request->content;
        $service->scheme_id = $request->scheme_id;
        $service->meta_word = $request->meta_word;
        $service->meta_description = $request->meta_description;
        uploadImage($request, $service,'featured_image');
        $service->update();
        toast('Record Updated Successfully!', 'success')->timerProgressBar();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index');
    }
}
