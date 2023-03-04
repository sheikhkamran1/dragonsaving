<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel = Carousel::all();
        return view('admin.carousel.index',compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carousel = new Carousel();
        $carousel->title = $request->title;
        uploadImage($request,$carousel,'image');
        $carousel->save();
        return redirect()->route('carousel.index');
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
        $carousel = Carousel::find($id);
        return view('admin.carousel.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carousel = Carousel::find($id);
        $carousel->title = $request->title;
        uploadImage($request,$carousel,'image');
        $carousel->update();
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();
        return redirect()->route('carousel.index');
    }
}
