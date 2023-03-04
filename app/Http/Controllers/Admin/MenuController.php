<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'menu_order' => 'required',
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->slug = Str::slug($request->name);
        $menu->menu_order = $request->menu_order;
        $menu->url = $request->url;
        $menu->save();
        toast('Record Saved Successfully!','success')->timerProgressBar();
        return redirect()->route('menu.index');
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
        $menu = Menu::find($id);
        return view('admin.menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'menu_order' => 'required',
        ]);

        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->url = $request->url;
        $menu->slug = Str::slug($request->name);
        $menu->menu_order = $request->menu_order;
        $menu->update();
        toast('Record Saved Successfully!','success')->timerProgressBar();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back();
    }
}
