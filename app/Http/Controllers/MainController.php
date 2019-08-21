<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {

    public function homepage(Request $request) {

        $order = $request->input('order', 'id');

        // $videogames = DB::select("SELECT * FROM videogame");

        // $videogames = Videogame::all();

        $videogames = Videogame::orderBy($order)->get();
        
        return view('homepage', ['videogames' => $videogames]);
    }
}