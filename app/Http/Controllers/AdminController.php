<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {


    public function addVideogame() {
        
        return view('add-videogame');

    }
}