<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        return view('admin.post.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
            'meta_word' => 'required',
            'meta_description' => 'required',
        ]);
        // dd($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->menu_id = $request->menu_id;
        $post->meta_word = $request->meta_word;
        $post->meta_description = $request->meta_description;
        $post->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $menu = Menu::all();
        return view('admin.post.edit',compact('post','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'menu_id' => 'required',
            'meta_word' => 'required',
            'meta_description' => 'required',
        ]);
        // dd($request->all());
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->menu_id = $request->menu_id;
        $post->meta_word = $request->meta_word;
        $post->meta_description = $request->meta_description;
        $post->update();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
