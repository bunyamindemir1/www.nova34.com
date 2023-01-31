<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PlatformController extends Controller
{
    public function index(){

        return view('emlak-tanitim.page.home');
    }

    /**
     * @param $lang
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * Change language method
     */
    public function change($lang)
    {
        App::setLocale($lang);
        return view('emlak-tanitim.page.home', compact('lang'));
    }
}
