<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Menu;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home(){
        $carousel = Carousel::all();
        $about = About::first();
        // return $about;
        return view('frontend.home',compact('carousel','about'));
    }
}
