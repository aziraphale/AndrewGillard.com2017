<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web2messengerController extends Controller
{
    public function index()
    {
        return view('web2messenger.index');
    }
}

/*
$this->_helper->cache(array('index'), array('web2messenger_indexaction'));
 */
