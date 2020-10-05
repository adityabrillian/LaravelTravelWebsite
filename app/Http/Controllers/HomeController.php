<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->first()->take(4)->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam adipisci totam, tempore explicabo deleniti odit vero dignissimos dolor eum incidunt officia tenetur harum ex ab quaerat cupiditate soluta. Quia, veritatis.

