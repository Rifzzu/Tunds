<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cafe;

class HomeController extends Controller
{
    public function home(){
        $cafe = DB::table('cafe')->paginate(5);
        return view('home',['cafe' => $cafe] );
    }
    public function shop(){
        $cafe = DB::table('cafe')->get();
        return view('shop',['cafe' => $cafe]);
    }
    public function forum(){
        return view('forum');
    }
    public function wishlist(){
        $wishlist = DB::table('wishlist')->get();
        return view('wishlist');
    }
    public function wishlistInsert(Request $request){
        $wish = Wishlist::create([
            'user_id' => $request->Auth::user()->id,
            'idCafe' => $request->dataCafe()->id,
        ]);
        return redirect()->route('');
        
    }
    public function profile(){
        return view('user/profile');
    }
    
    public function detail($id){
        $cafe = DB::table('cafe')->where('idCafe', $id)->first();
        $cafeMenu = Cafe::where('idCafe', $id)->get();
        return view('detail', ['cafe'=>$cafe, 'cafeMenu'=>$cafeMenu]);
    }

}
