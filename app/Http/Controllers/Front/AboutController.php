<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('about');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.about.index',[
            'about' =>  \App\Models\About::first(),
            'steps' => \App\Models\WorkStep::get(),
            'metaBanner' => $metaBanner,
            'counters' => \App\Models\Countr::get(),
            'parteners' => \App\Models\Partener::parteners()->get(),
            'features' => \App\Models\Feature::get(),
            'teams' => \App\Models\Team::get(),
            'aboutsec'  => \App\Models\About::latest('id')->first()
        ]);
    }
}
