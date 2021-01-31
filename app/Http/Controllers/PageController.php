<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.homepage.home');
    }

    public function faq() {
        return view('pages.faq.index');
    }

    public function tattoo() {
        return view('pages.tattoo.index');
    }

    public function removal() {
        return view('pages.removal.index');
    }

    public function studio() {
        return view('pages.studio.index');
    }

    public function piercing() {
        return view('pages.piercing.index');
    }
}
