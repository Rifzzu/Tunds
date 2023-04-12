<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $cafe = DB::table('cafe')->get();
        return view('home',['cafe' => $cafe] );
    }
    public function shop(){
        return view('shop');
    }
    public function forum(){
        return view('forum');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function profile(){
        return view('user/profile');
    }

}
