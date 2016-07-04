<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function contact()
    {
        $people = [
//          'Zandy Basilio','Cha Sercado','Mael Basilio'
        ];

        return view('pages.contact',compact('people'));
    }
}
