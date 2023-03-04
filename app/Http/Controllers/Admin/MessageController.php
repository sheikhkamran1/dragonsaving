<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::all();
        return view('admin.message.index',compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->name;
        $message->title = $request->title;
        $message->content = $request->content;
        uploadImage($request,$message,'image');
        $message->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('message.index');
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
        $message = Message::find($id);
        return view('admin.message.edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = Message::find($id);
        $message->name = $request->name;
        $message->title = $request->title;
        $message->content = $request->content;
        uploadImage($request,$message,'image');
        $message->update();
        toast('Record Updated Successfully!', 'success')->timerProgressBar();
        return redirect()->route('message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('message.index');
    }
}
