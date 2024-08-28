<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner =getMeta('service');
        // Set Meta Home
        metaGenerate($metaBanner);
        $resource = \App\Models\Service::orderBy('id', 'asc')->first();
        // dd($resource);
        return view('front.services.show',[
            'service' =>  $resource,
            'metaBanner' => $metaBanner,
            'services' => \App\Models\Service::get(),
            'products' => \App\Models\Product::latest()->take(10)->get(),
            'tools' => \App\Models\Partener::tools()->latest()->get(),

        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('service');
           // Set Meta Home
           metaGenerate($metaBanner);
           $resource = \App\Models\Service::findOrFail($id);
        return view('front.services.show',[
            'service' =>  $resource,
            'metaBanner' => $metaBanner,
            'services' => \App\Models\Service::get(),
            'products' => \App\Models\Product::latest()->take(10)->get(),
            'tools' => \App\Models\Partener::tools()->latest()->get(),

        ]);
    }
}
