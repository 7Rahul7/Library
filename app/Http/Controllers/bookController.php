<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\GenderModel;
use App\Models\Book;

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

    public function formdata(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'distributor'=>'required',
            'Isbn_number'=>'required',

        ]);
        Book::create([
            'name'=>$req ->name,
            'author'=>$req -> author,
            'publisher'=>$req -> publisher,
            'distributor'=>$req -> distributor,
            'Isbn_number'=>$req -> isbn_no,
            'img'=>$req -> img,
            ]);

            return redirect()->back()->with('message', 'Book added successfully');


    }


}

