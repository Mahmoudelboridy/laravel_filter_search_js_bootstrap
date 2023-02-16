<?php

namespace App\Http\Controllers;

use App\Models\name;
use Illuminate\Http\Request;

class maccontroller extends Controller
{
    //

    public function mac(){
        $datas=name::get();
        return view ('mac',compact('datas'));
    }
}