<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Offers;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offers::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request)->all();
        $offers = new Offers();
        $offers->title = $request->title;
        uploadImage($request,$offers,'featured_image');
        $offers->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('offers.index');
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
        $offers = Offers::find($id);
        return view('admin.offers.edit',compact('offers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offers = Offers::find($id);
        $offers->title = $request->title;
        uploadImage($request,$offers,'featured_image');
        $offers->update();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offers = Offers::find($id);
        $offers->delete();
        return redirect()->route('offers.index');
    }
}
