<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcursanteController extends Controller
{
    public function nuevo() {
    	return view('alta_concursante');
    }
}
