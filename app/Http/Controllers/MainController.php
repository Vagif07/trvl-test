<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    /**
     * Update Session Locale
     *
     * @param  Selected locale code $locale
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
