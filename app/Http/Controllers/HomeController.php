<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Event;
use App;
class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return App::getLocale();
        return view('home')->with(['settings' => Setting::first() ,'sliders' => Slider::all(), 'event' => Event::latest()->first()]);
    }
}
