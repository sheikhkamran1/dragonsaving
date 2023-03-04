<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scheme = Scheme::all();
        return view('admin.scheme.index',compact('scheme'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        return view('admin.scheme.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'menu_id' => 'required',
        ]);
        // dd($request->all());
        $scheme = new Scheme();
        $scheme->name = $request->name;
        $scheme->slug = Str::slug($request->name);
        $scheme->menu_id = $request->menu_id;
        $scheme->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('scheme.index');
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
        $scheme = scheme::find($id);
        $menu = Menu::all();
        return view('admin.scheme.edit',compact('scheme','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'menu_id' => 'required',
        ]);
        // dd($request->all());
        $scheme = Scheme::find($id);
        $scheme->name = $request->name;
        $scheme->slug = Str::slug($request->name);
        $scheme->menu_id = $request->menu_id;
        $scheme->update();
        toast('Record Updated Successfully!', 'success')->timerProgressBar();
        return redirect()->route('scheme.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scheme = Scheme::find($id);
        $scheme->delete();
        return redirect()->route('scheme.index');
    }
}
