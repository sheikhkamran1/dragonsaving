<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = Page::all();
        return view('admin.page.index', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        return view('admin.page.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
            'meta_word' => 'required',
            'meta_description' => 'required',
        ]);
        // dd($request->all());
        $page = new Page();
        $page->name = $request->name;
        $page->slug = Str::slug($request->name);
        $page->content = $request->content;
        $page->menu_id = $request->menu_id;
        $page->meta_word = $request->meta_word;
        $page->meta_description = $request->meta_description;
        $page->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::find($id);
        return view('admin.page.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::find($id);
        $menu = Menu::all();
        return view('admin.page.edit',compact('page','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
            'meta_word' => 'required',
            'meta_description' => 'required',
        ]);
        // dd($request->all());
        $page = Page::find($id);
        $page->name = $request->name;
        $page->slug = Str::slug($request->name);
        $page->content = $request->content;
        $page->menu_id = $request->menu_id;
        $page->meta_word = $request->meta_word;
        $page->meta_description = $request->meta_description;
        $page->update();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('page.index');
    }
}
