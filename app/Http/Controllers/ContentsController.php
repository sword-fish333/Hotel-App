<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function home()
    {   $data=[];
        $data['v']='1.0.0.2';
        return view('contents/home',$data);
    }
}
