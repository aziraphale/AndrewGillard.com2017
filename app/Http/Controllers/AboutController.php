<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.about');
    }
}

/*
 $this->_helper->cache(array('index'), array('about_indexaction'));
*/
