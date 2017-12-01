<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;

class iframeController extends Controller
{
    
    public function index()
    {
        $num_categorias = 24;
    	
        $categories = [];

    	for ($i=1; $i <= $num_categorias ; $i++) { 
    		$categories[] = [
    			'id' => $i,
				'name' => 'categoria'.$i,
				'thumbnail' => '',
				'link' => '',
    		];
    	}
    	
    	return view('iframe', ['categories' => $categories]);
    }
}