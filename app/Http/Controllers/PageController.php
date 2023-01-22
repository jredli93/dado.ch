<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ServiceGroup;
use App\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PageController extends Controller
{
    public function index() {
        return view('pages.homepage.home');
    }

    public function faq() {
        return view('pages.faq.index');
    }

    public function ContactForm(Request $request) {
     Mail::to('example@email')->send(new ContactMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');
    }

    public function form() {
        return view('pages.form.index');
    }

    public function tattoo() {

        $services = ServiceType::whereHas('serviceGroup', function($q){
            $q->where('name', 'tattoo');
        })->get();

        // print_r($services);

        return view('pages.tattoo.index', compact('services'));
    }

    public function studio() {
        return view('pages.studio.index');
    }

    public function laser() {
        $services = ServiceType::whereHas('serviceGroup', function($q){
            $q->where('name', 'laser');
        })->get();

        return view('pages.laser.index', compact('services'));
    }
}
