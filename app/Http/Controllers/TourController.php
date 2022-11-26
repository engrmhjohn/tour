<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Copyright;
use App\Models\DayTour;
use App\Models\Faq;
use App\Models\Logo;
use App\Models\Payment;
use App\Models\Policy;
use App\Models\PopularTour;
use App\Models\Slider;
use App\Models\TC;
use DB;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'sliders'=>Slider::orderBy('id','desc')->take(1)->get(),
            'ptours'=>PopularTour::where('status',1)->orderBy('id','desc')->take(3)->get(),
            'dtours'=>DayTour::where('d_status',1)->orderBy('id','desc')->take(3)->get(),
            'clients'=>Client::orderBy('id','desc')->take(1)->get(),
        ]);
    }
    public function about(){
        return view('frontEnd.home.about',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'abouts'=>About::orderBy('id','desc')->take(3)->get(),
        ]);
    }
    public function popularTour(){
        return view('frontEnd.home.popular-tour',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'ptours'=>PopularTour::orderBy('id','desc')->take(9)->get(),
        ]);
    }
    public function popularTourDetails($pt_slug){
        $pt_slug = PopularTour::find($pt_slug);
        return view('frontEnd.tourDetails.popular-tour-details',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'ptours'=>PopularTour::orderBy('id','desc')->take(1)->get(),
            'pt_slug'=>$pt_slug
        ]);
    }
    public function DayTour(){
        return view('frontEnd.home.day-tour',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'dtours'=>DayTour::orderBy('id','desc')->take(9)->get(),
        ]);
    }
    public function dayTourDetails($day_tour_slug){
        $day_tour_slug = DayTour::find($day_tour_slug);
        return view('frontEnd.tourDetails.day-tour-details',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'dtours'=>DayTour::orderBy('id','desc')->take(1)->get(),
            'day_tour_slug'=>$day_tour_slug
        ]);
    }
    public function contactUs(){
        return view('frontEnd.home.contact-us',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
        ]);
    }
    public function faq(){
        return view('frontEnd.home.faq',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'faqs'=>Faq::orderBy('id','desc')->get(),
        ]);
    }
    public function privacyPolicy(){
        return view('frontEnd.home.privacy-policy',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'pps'=>Policy::orderBy('id','desc')->take(1)->get(),

        ]);
    }
    public function tnc(){
        return view('frontEnd.home.t&c',[
            'logos'=>Logo::orderBy('id','desc')->take(1)->get(),
            'payments'=>Payment::orderBy('id','desc')->take(1)->get(),
            'copyrights'=>Copyright::orderBy('id','desc')->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->take(1)->get(),
            'tncs'=>TC::orderBy('id','desc')->take(1)->get(),
        ]);
    }
}
