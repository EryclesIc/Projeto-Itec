<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
   public function home(){

        $path = public_path().'/js';
        $data = json_decode(file_get_contents($path. "/noticias.json"));
        $data_collection = collect($data)->take(-3);

        return view("index", ['dados'=>$data_collection]);
   }
}
