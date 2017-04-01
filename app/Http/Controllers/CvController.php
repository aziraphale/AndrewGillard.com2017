<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('cv.index');
    }
}

/*
 $this->_helper->cache(array('index'), array('cv_indexaction'));
 */
