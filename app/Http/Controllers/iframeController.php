<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;

class iframeController extends Controller
{
    
    public function index()
    {

    	$categories = [];

    	for ($i=1; $i <= 24 ; $i++) { 
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