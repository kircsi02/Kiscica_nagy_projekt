<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImgSolution;

class ImgSolutionController extends Controller
{
    function ImageNumber($n){
        //return ImgSolution::all();
        return DB::select("SELECT solution FROM imgsolution WHERE imgnumber = $n");
    }
}
