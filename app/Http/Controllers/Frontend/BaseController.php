<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public $menus;
    public function __construct() {
        $menus = Menu::with('posts')->get();
        $profile = Profile::first();

        View::share('menus',$menus);
    }
}
