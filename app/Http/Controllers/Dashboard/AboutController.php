<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAboutUS;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index()
    {
        $data = About::first() ?? new About();
        return view('dashboard.about-us.form', compact('data'));
    }
    public function indexSec()
    {
        $data = About::find(2) ?? new About();

        return view('dashboard.about-us.formsec', compact('data'));
    }



    public function saveData(StoreAboutUS $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.ABOUT_PATH'), $inputs['en']['title']);
        }
        // dd($inputs);
        $data = About::first();
        $data->update($inputs);


        toast(__('lang.updated'), 'success');
        return redirect()->back();
    }
    public function saveDataSec(StoreAboutUS $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.ABOUT_PATH'), $inputs['en']['title']);
        }
        // dd($inputs);
        $data = About::find(2);

        if (!$data) {
            $data = About::create($inputs);
        } else {
            $data->update($inputs);
        }



        toast(__('lang.updated'), 'success');
        return redirect()->back();
    }
}
