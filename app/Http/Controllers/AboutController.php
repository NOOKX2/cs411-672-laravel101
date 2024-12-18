<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('about.index');
    }
}
