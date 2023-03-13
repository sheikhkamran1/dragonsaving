<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'city' => 'required',
        //     'contact' => 'required',
        //     'email' => 'required',
        // ]);
        // dd($request->all());
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->city = $request->city;
        $profile->street = $request->street;
        $profile->contact_1 = $request->contact_1;
        $profile->contact_2 = $request->contact_2;
        $profile->email = $request->email;
        $profile->reg_no = $request->reg_no;
        uploadImage($request, $profile, 'logo');
        uploadImage($request, $profile, 'aniversary_image');
        $profile->save();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('profile.index');
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
        $profile = Profile::find($id);
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'city' => 'required',
        //     'contact' => 'required',
        //     'email' => 'required',
        // ]);
        $profile = Profile::find($id);
        $profile->name = $request->name;
        $profile->city = $request->city;
        $profile->street = $request->street;
        $profile->contact_1 = $request->contact_1;
        $profile->contact_2 = $request->contact_2;
        $profile->email = $request->email;
        uploadImage($request, $profile, 'logo');
        uploadImage($request, $profile, 'aniversary_image');
        $profile->update();
        toast('Record Saved Successfully!', 'success')->timerProgressBar();
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profile.index');
    }
}
