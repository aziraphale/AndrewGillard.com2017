<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }
}

/*
 $this->_helper->cache(array('index'), array('portfolio_indexaction'));
 */
