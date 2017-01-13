<?php

namespace PixelFarms\Kindle;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KindleController extends Controller
{
    //
public function add($a, $b){
    $result = $a + $b;
    return view('kindle::add', compact('result'));
}

    public function subtract($a, $b){
        echo $a - $b;
    }
}
