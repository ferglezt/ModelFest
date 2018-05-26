<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;

class SubcategoriaController extends Controller
{
    public function all(Request $request) {
    	$id_cat = $request->input('id_cat');
    	$categorias = Subcategoria::all();
    	if($id_cat) {
    		$categorias = $categorias
    		->where('id_cat', '=', $id_cat)
    		->all();
    	}
    	return response()->json($categorias, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
