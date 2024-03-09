<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Layanan;
use App\Models\Contact;
use App\Models\Pemerintahan;
use App\Models\Pendidikan;
use App\Models\Isp;
use App\Models\Telco;
use App\Models\Finance;
use App\Models\Payment;

class HomeController extends Controller
{
    public function index()
    {

        $sliders = Slider::all();
        $contact = Contact::first();
        return view('home.index', compact(
            'sliders','contact',
        ));
        
    }

    public function profil()
    {
        $contact = Contact::first();
        return view('home.profil', compact('contact',));
    }

    public function legalitas()
    {
        $contact = Contact::first();
        return view('home.legalitas', compact('contact',));
    }

    public function Layanan()
    {
        $layanans = Layanan::all();
        $contact = Contact::first();
        return view('home.Layanan', compact(
            'layanans','contact',
        ));
    }

    public function pelanggan()
    {
        $pemerintahans = Pemerintahan::all();
        $pendidikans = Pendidikan::all();
        $isps = Isp::all();
        $telcos = Telco ::all();
        $finances = Finance ::all();
        $payments = Payment::all();
        $contact = Contact::first();
        return view('home.pelanggan', compact('contact','pemerintahans','pendidikans','isps','telcos','finances','payments'));
    }

    public function Contact()
    {
        $contact = Contact::first();
        return view('home.Contact', compact('contact',));
    }

}

