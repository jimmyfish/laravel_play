<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale('en');
        $locale = App::getLocale();

        return $locale;
    }
}