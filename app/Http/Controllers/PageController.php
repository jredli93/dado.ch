<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ServiceGroup;
use App\ServiceType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.homepage.home');
    }

    public function faq() {
        return view('pages.faq.index');
    }

    public function form($id) {
        return view('pages.form.index', compact('id'));
    }

    public function tattoo() {

        $services = ServiceType::whereHas('serviceGroup', function($q){
            $q->where('name', 'tattoo');
        })->get();

        return view('pages.tattoo.index', compact('services'));
    }

    public function removal() {

        $services = ServiceType::whereHas('serviceGroup', function($q){
            $q->where('name', 'removal');
        })->get();

        return view('pages.removal.index', compact('services'));
    }

    public function studio() {
        return view('pages.studio.index');
    }

    public function piercing() {

        $services = ServiceType::whereHas('serviceGroup', function($q){
            $q->where('name', 'piercing');
        })->get();

        return view('pages.piercing.index', compact('services'));
    }
}
