<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HwController extends Controller
{
    public function sport($title,$id)
    {
        return view('sport',[
            'title'=>$title,
            'id'=>$id
        ]);
    }

    public function economyValues($title,$id)
    {
        return view('economyValue',[
            'title'=>$title,
            'id'=>$id
        ]);
    }
}
