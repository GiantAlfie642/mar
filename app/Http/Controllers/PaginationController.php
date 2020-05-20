<?php

namespace App\Http\Controllers;

use App\Http\Service\PaService;
use App\Item;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function pagination(){

        $service=new PaService();
        dd($service);
        //dd($page);


       // $tt=Item::paginate(3)->onEachSide(3);
      //  dd($tt,$tt->firstItem());
        // $test=Item::paginate(2)->onEachSide(5)->withPath('http://127.0.0.1:8000/pp?page=3');
        // dd($test);
        //dd($test->total(),$test->items(),$test);
    }
}
