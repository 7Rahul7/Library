<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    //
     public function index()
    {
        return view ('book.index');
    }

    public function addBook()
    {

        return view ('book.addBook');
    }
}
