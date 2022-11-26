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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class AdminController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role=='0'){
            return view('admin.home.home');
        }else{
            return view('admin.home.user');
        }
    }
    public function admin(){
        return view('admin.manages.manage-admin',[
            'users'=>User::all()
        ]);
    }
    public function role($id){
        $user = User::find($id);
        if ($user->role==0){
            $user->role=1;
            $user->save();
            return back();
        }else{
            $user->role=0;
            $user->save();
            return back();
        }
    }
    public function deleteAdmin(Request $request){
        $admin = User::find($request->admin_id);
        $admin->delete();
        return redirect('manage-admin');
    }
    public function logo(){
        return view('admin.manages.add-logo');
    }
    public function logoImg(Request $request){
        $logo = new Logo();
        $logo->logo = $this->saveImage($request,'logo');
        $logo->save();
        return redirect('manage-logo')->with('success','Succesfully Logo Added to the Database');
    }
    public function manageLogo(){
        return view('admin.manages.manage-logo',[
            'logos' => Logo::all()
        ]);
    }
    public function editLogo($id){
        $logo = Logo::find($id);
        return view('admin.manages.edit-logo',[
            'logo' =>$logo
        ]);
    }
    public function updateLogo(Request $request){
        $logo=Logo::find($request->logo_id);
        if($request->file('logo')){
            if($logo->logo){
                unlink($logo->logo);
            }
            $logo->logo = $this->saveImage($request,'logo');
        }
        $logo->save();
        return redirect('manage-logo')->with('success','Successfully Logo Updated from the Database');
    }
    public function deleteLogo(Request $request){
        $logo=Logo::find($request->logo_id);
        if($logo->imageField){
            unlink($logo->imageField);
        }
        $logo->delete();
        return back()->with('success','Successfully Logo Deleted from Database');
    }
    public function dayTour(){
        return view('admin.manages.add-day-tour');
    }
    public function saveDayTour(Request $request){
        $dtour = new DayTour();
        $dtour->day_tour_title = $request->day_tour_title;
        $dtour->day_tour_slug = $this->makeDaySlug($request);
        $dtour->day_tour_location = $request->day_tour_location;
        $dtour->day_tour_duration = $request->day_tour_duration;
        $dtour->day_tour_attraction = $request->day_tour_attraction;
        $dtour->day_tour_holiday_special = $request->day_tour_holiday_special;
        $dtour->day_tour_holiday = $request->day_tour_holiday;
        $dtour->day_tour_description = $request->day_tour_description;
        $dtour->day_tour_schedule = $request->day_tour_schedule;
        $dtour->day_tour_image = $this->saveImage($request,'day_tour_image');
        $dtour->day_tour_s_bdt = $request->day_tour_s_bdt;
        $dtour->day_tour_s_d = $request->day_tour_s_d;
        $dtour->day_tour_d_bdt = $request->day_tour_d_bdt;
        $dtour->day_tour_d_d = $request->day_tour_d_d;
        $dtour->day_tour_t_bdt = $request->day_tour_t_bdt;
        $dtour->day_tour_t_d = $request->day_tour_t_d;
        $dtour->day_tour_q_bdt = $request->day_tour_q_bdt;
        $dtour->day_tour_q_d = $request->day_tour_q_d;
        $dtour->day_tour_price_inclusion = $request->day_tour_price_inclusion;
        $dtour->day_tour_ttc = $request->day_tour_ttc;
        $dtour->save();
        return redirect('manage-day-tour')->with('success','Successfully Tour Added to Database');
    }
    private function makeDaySlug($request)
    {
        $str = strtolower($request->day_tour_title);
        return preg_replace('/\s+/u','-',trim($str));
    }
    public function manageDayTour(){
        return view('admin.manages.manage-day-tour',[
            'dtours'=> DayTour::all()
        ]);
    }
    public function deleteDayTour(Request $request){
        $dtour = DayTour::find($request->dtour_id);
        if ($dtour->imageField){
            unlink($dtour->imageField);
        }
        $dtour->delete();
        return redirect('manage-day-tour')->with('success','Successfully Tour Deleted from Database');
    }
    public function editDayTour($id){
        $dtour = DayTour::find($id);
        return view('admin.manages.edit-day-tour',[
            'dtour'=> $dtour
        ]);
    }
    public function updateDayTour(Request $request){
        $dtour = DayTour::find($request->dtour_id);
        $dtour->day_tour_title = $request->day_tour_title;
        $dtour->day_tour_location = $request->day_tour_location;
        $dtour->day_tour_duration = $request->day_tour_duration;
        $dtour->day_tour_attraction = $request->day_tour_attraction;
        $dtour->day_tour_holiday_special = $request->day_tour_holiday_special;
        $dtour->day_tour_holiday = $request->day_tour_holiday;
        $dtour->day_tour_description = $request->day_tour_description;
        $dtour->day_tour_schedule = $request->day_tour_schedule;
        $dtour->day_tour_s_bdt = $request->day_tour_s_bdt;
        $dtour->day_tour_s_d = $request->day_tour_s_d;
        $dtour->day_tour_d_bdt = $request->day_tour_d_bdt;
        $dtour->day_tour_d_d = $request->day_tour_d_d;
        $dtour->day_tour_t_bdt = $request->day_tour_t_bdt;
        $dtour->day_tour_t_d = $request->day_tour_t_d;
        $dtour->day_tour_q_bdt = $request->day_tour_q_bdt;
        $dtour->day_tour_q_d = $request->day_tour_q_d;
        $dtour->day_tour_price_inclusion = $request->day_tour_price_inclusion;
        $dtour->day_tour_ttc = $request->day_tour_ttc;
        if ($request->file('day_tour_image')){
            if ($dtour->day_tour_image){
                unlink($dtour->day_tour_image);
            }
            $dtour->day_tour_image = $this->saveImage($request,'day_tour_image');
        }
        $dtour->save();
        return redirect('manage-day-tour')->with('success','Successfully Tour Updated to Database');
    }
    public function dStatus($id){
        $dtour = DayTour::find($id);
        if ($dtour->d_status==1){
            $dtour->d_status=0;
            $dtour->save();
            return back();
        }else{
            $dtour->d_status=1;
            $dtour->save();
            return back();
        }
    }
    public function popularTour(){
        return view('admin.manages.add-popular-tour');
    }
    public function savePopularTour(Request $request){
        $p_tour= new PopularTour();
        $p_tour->pt_title = $request->pt_title;
        $p_tour->pt_slug = $this->makeSlug($request);

        $p_tour->pt_fday_location = $request->pt_fday_location;
        $p_tour->pt_fday_duration = $request->pt_fday_duration;
        $p_tour->pt_fday_attraction = $request->pt_fday_attraction;
        $p_tour->pt_fday_holiday_special = $request->pt_fday_holiday_special;
        $p_tour->pt_fday_holiday = $request->pt_fday_holiday;
        $p_tour->pt_fday_description = $request->pt_fday_description;
        $p_tour->pt_fday_schedule = $request->pt_fday_schedule;
        $p_tour->pt_fday_image = $this->saveImage($request, 'pt_fday_image');

        $p_tour->pt_sday_location = $request->pt_sday_location;
        $p_tour->pt_sday_duration = $request->pt_sday_duration;
        $p_tour->pt_sday_attraction = $request->pt_sday_attraction;
        $p_tour->pt_sday_holiday_special = $request->pt_sday_holiday_special;
        $p_tour->pt_sday_holiday = $request->pt_sday_holiday;
        $p_tour->pt_sday_description = $request->pt_sday_description;
        $p_tour->pt_sday_schedule = $request->pt_sday_schedule;
        $p_tour->pt_sday_image = $this->saveImage($request, 'pt_sday_image');

        $p_tour->pt_tday_location = $request->pt_tday_location;
        $p_tour->pt_tday_duration = $request->pt_tday_duration;
        $p_tour->pt_tday_attraction = $request->pt_tday_attraction;
        $p_tour->pt_tday_holiday_special = $request->pt_tday_holiday_special;
        $p_tour->pt_tday_holiday = $request->pt_tday_holiday;
        $p_tour->pt_tday_description = $request->pt_tday_description;
        $p_tour->pt_tday_schedule = $request->pt_tday_schedule;
        $p_tour->pt_tday_image = $this->saveImage($request, 'pt_tday_image');

        $p_tour->ptsp_bdt = $request->ptsp_bdt;
        $p_tour->ptsp_d = $request->ptsp_d;
        $p_tour->ptdp_bdt = $request->ptdp_bdt;
        $p_tour->ptdp_d = $request->ptdp_d;
        $p_tour->pttp_bdt = $request->pttp_bdt;
        $p_tour->pttp_d = $request->pttp_d;
        $p_tour->ptqp_bdt = $request->ptqp_bdt;
        $p_tour->ptqp_d = $request->ptqp_d;
        $p_tour->pt_price_inclusion = $request->pt_price_inclusion;
        $p_tour->pt_t2c = $request->pt_t2c;

        $p_tour->save();
        return redirect('manage-popular-tour')->with('success','successfully Tour Added to Database');
    }
    private function makeSlug($request)
    {
        $str = strtolower($request->pt_title);
        return preg_replace('/\s+/u','-',trim($str));
    }
    public function saveImage($request, $imageField){
        $image =  $request->file($imageField);
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory = 'adminAsset/Tour-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function managePopularTour(){
        return view('admin.manages.manage-popular-tour',[
            'ptours'=> PopularTour::all()
        ]);
    }
    public function deletePopularTour(Request $request){
        $ptour = PopularTour::find($request->ptour_id);
        if($ptour->imageField){
            unlink($ptour-> imageField );
        }
        $ptour->delete();
        return redirect('manage-popular-tour')->with('success','Successfully Tour Deleted from Database');
    }
    public function editPopularTour($id){
        $ptour = PopularTour::find($id);
        return view('admin.manages.edit-popular-tour',[
           'ptour'=>$ptour
        ]);
    }
    public function updatePopularTour(Request $request){
        $p_tour = PopularTour::find($request->ptour_id);
        $p_tour->pt_title = $request->pt_title;

        $p_tour->pt_fday_location = $request->pt_fday_location;
        $p_tour->pt_fday_duration = $request->pt_fday_duration;
        $p_tour->pt_fday_attraction = $request->pt_fday_attraction;
        $p_tour->pt_fday_holiday_special = $request->pt_fday_holiday_special;
        $p_tour->pt_fday_holiday = $request->pt_fday_holiday;
        $p_tour->pt_fday_description = $request->pt_fday_description;
        $p_tour->pt_fday_schedule = $request->pt_fday_schedule;

        $p_tour->pt_sday_location = $request->pt_sday_location;
        $p_tour->pt_sday_duration = $request->pt_sday_duration;
        $p_tour->pt_sday_attraction = $request->pt_sday_attraction;
        $p_tour->pt_sday_holiday_special = $request->pt_sday_holiday_special;
        $p_tour->pt_sday_holiday = $request->pt_sday_holiday;
        $p_tour->pt_sday_description = $request->pt_sday_description;
        $p_tour->pt_sday_schedule = $request->pt_sday_schedule;

        $p_tour->pt_tday_location = $request->pt_tday_location;
        $p_tour->pt_tday_duration = $request->pt_tday_duration;
        $p_tour->pt_tday_attraction = $request->pt_tday_attraction;
        $p_tour->pt_tday_holiday_special = $request->pt_tday_holiday_special;
        $p_tour->pt_tday_holiday = $request->pt_tday_holiday;
        $p_tour->pt_tday_description = $request->pt_tday_description;
        $p_tour->pt_tday_schedule = $request->pt_tday_schedule;

        $p_tour->ptsp_bdt = $request->ptsp_bdt;
        $p_tour->ptsp_d = $request->ptsp_d;
        $p_tour->ptdp_bdt = $request->ptdp_bdt;
        $p_tour->ptdp_d = $request->ptdp_d;
        $p_tour->pttp_bdt = $request->pttp_bdt;
        $p_tour->pttp_d = $request->pttp_d;
        $p_tour->ptqp_bdt = $request->ptqp_bdt;
        $p_tour->ptqp_d = $request->ptqp_d;
        $p_tour->pt_price_inclusion = $request->pt_price_inclusion;
        $p_tour->pt_t2c = $request->pt_t2c;
        if($request->file('pt_fday_image')){
            if($p_tour->pt_fday_image){
                unlink($p_tour->pt_fday_image );
            }
            $p_tour->pt_fday_image = $this->saveImage($request,'pt_fday_image');
        }
        if ($request->file('pt_sday_image')){
            if($p_tour->pt_sday_image){
                unlink($p_tour->pt_sday_image );
            }
            $p_tour->pt_sday_image = $this->saveImage($request,'pt_sday_image');
        }
        if ($request->file('pt_tday_image')){
            if($p_tour->pt_tday_image){
                unlink($p_tour->pt_tday_image );
            }
            $p_tour->pt_tday_image = $this->saveImage($request,'pt_tday_image');
        }
        $p_tour->save();
        return redirect('manage-popular-tour')->with('success','Successfully Tour Updated from the Database');
    }
    public function status($id){
        $ptour = PopularTour::find($id);
        if ($ptour->status==1){
            $ptour->status=0;
            $ptour->save();
            return back();
        }else{
            $ptour->status=1;
            $ptour->save();
            return back();
        }
    }
    public function contactInfo(){
        return view('admin.manages.add-contact-info');
    }
    public function saveContactInfo(Request $request){
        $contact = new Contact();
        $contact->contact_mail = $request->contact_mail;
        $contact->contact_number = $request->contact_number;
        $contact->ytlink = $request->ytlink;
        $contact->fblink = $request->fblink;
        $contact->twitlink = $request->twitlink;
        $contact->instalink = $request->instalink;
        $contact->office_location = $request->office_location;
        $contact->office_map = $request->office_map;
        $contact->save();
        return redirect('manage-contact-info')->with('success','Successfully Contact Info Save to Database');
    }
    public function manageContactInfo(){
        return view('admin.manages.manage-contact',[
            'contacts' => Contact::all()
        ]);
    }
    public function editContactInfo($id){
        $contact = Contact::find($id);
        return view('admin.manages.edit-contact-info',[
            'contact' => $contact
        ]);
    }
    public function updateContactInfo(Request $request){
        $contact = Contact::find($request->contact_id);
        $contact->contact_mail = $request->contact_mail;
        $contact->contact_number = $request->contact_number;
        $contact->ytlink = $request->ytlink;
        $contact->fblink = $request->fblink;
        $contact->twitlink = $request->twitlink;
        $contact->instalink = $request->instalink;
        $contact->office_location = $request->office_location;
        $contact->office_map = $request->office_map;
        $contact->save();
        return redirect('manage-contact-info')->with('success','Successfully Updated Contact Info to Database');
    }
    public function sliderInfo(){
        return view('admin.manages.add-slider');
    }
    public function saveSliderInfo(Request $request){
        $slider = new Slider();
        $slider->f_slider_title = $request->f_slider_title;
        $slider->f_slider_description = $request->f_slider_description;
        $slider->f_slider_pic = $this->saveImage($request,'f_slider_pic');

        $slider->s_slider_title = $request->s_slider_title;
        $slider->s_slider_description = $request->s_slider_description;
        $slider->s_slider_pic = $this->saveImage($request,'s_slider_pic');

        $slider->t_slider_title = $request->t_slider_title;
        $slider->t_slider_description = $request->t_slider_description;
        $slider->t_slider_pic = $this->saveImage($request,'t_slider_pic');
        $slider->save();
        return redirect('manage-slider-info')->with('success','Successfully Added Slider Info to Database');
    }
    public function manageSliderInfo(){
        return view('admin.manages.manage-slider',[
            'sliders'=> Slider::all()
        ]);
    }
    public function editSliderInfo($id){
        $slider = Slider::find($id);
        return view('admin.manages.edit-slider',[
            'slider'=> $slider
        ]);
    }
    public function updateSliderInfo(Request $request){
        $slider = Slider::find($request->slider_id);
        $slider->f_slider_title = $request->f_slider_title;
        $slider->f_slider_description = $request->f_slider_description;

        $slider->s_slider_title = $request->s_slider_title;
        $slider->s_slider_description = $request->s_slider_description;

        $slider->t_slider_title = $request->t_slider_title;
        $slider->t_slider_description = $request->t_slider_description;
        if($request->file('f_slider_pic')){
            if($slider->f_slider_pic){
                unlink($slider->f_slider_pic );
            }
            $slider->f_slider_pic = $this->saveImage($request,'f_slider_pic');
        }
        if($request->file('s_slider_pic')){
            if($slider->s_slider_pic){
                unlink($slider->s_slider_pic );
            }
            $slider->s_slider_pic = $this->saveImage($request,'s_slider_pic');
        }
        if($request->file('t_slider_pic')){
            if($slider->t_slider_pic){
                unlink($slider->t_slider_pic );
            }
            $slider->t_slider_pic = $this->saveImage($request,'t_slider_pic');
        }
        $slider->save();
        return redirect('manage-slider-info')->with('success','Successfully Updated Slider Info to Database');
    }
    public function paymentInfo(){
        return view('admin.manages.add-payment');
    }
    public function savePaymentInfo(Request $request){
        $payment = new Payment();
        $payment->bkash_number = $request->bkash_number;
        $payment->bkash_pic = $this->saveImage($request,'bkash_pic');
        $payment-> nagad_number= $request->nagad_number;
        $payment->nagad_pic = $this->saveImage($request,'nagad_pic');
        $payment->rocket_number = $request->rocket_number;
        $payment->rocket_pic = $this->saveImage($request,'rocket_pic');
        $payment->bank_acc_number = $request->bank_acc_number;
        $payment->bank_acc_pic = $this->saveImage($request,'bank_acc_pic');
        $payment->save();
        return redirect('manage-payment-info')->with('success','Successfully Payment Info Added to Database');
    }
    public function managePaymentInfo(){
        return view('admin.manages.manage-payment',[
            'payments' => Payment::all()
        ]);
    }
    public function editPaymentInfo($id){
        $payment = Payment::find($id);
        return view('admin.manages.edit-payment',[
            'payment' => $payment
        ]);
    }
    public function updatePaymentInfo(Request $request){
        $payment = Payment::find($request->payment_id);
        $payment->bkash_number = $request->bkash_number;
        $payment->nagad_number = $request->nagad_number;
        $payment->rocket_number = $request->rocket_number;
        $payment->bank_acc_number = $request->bank_acc_number;
        if ($request->file('bkash_pic')){
            if ($payment->bkash_pic){
                unlink($payment->bkash_pic);
            }
            $payment->bkash_pic = $this->saveImage($request,'bkash_pic');
        }
        if ($request->file('nagad_pic')){
            if ($payment->nagad_pic){
                unlink($payment->nagad_pic);
            }
            $payment->nagad_pic = $this->saveImage($request,'nagad_pic');
        }
        if ($request->file('rocket_pic')){
            if ($payment->rocket_pic){
                unlink($payment->rocket_pic);
            }
            $payment->rocket_pic = $this->saveImage($request,'rocket_pic');
        }
        if ($request->file('bank_acc_pic')){
            if ($payment->bank_acc_pic){
                unlink($payment->bank_acc_pic);
            }
            $payment->bank_acc_pic = $this->saveImage($request,'bank_acc_pic');
        }
        $payment->save();
        return redirect('manage-payment-info')->with('success','Successfully Payment Info Updated to Database');
    }
    public function clientInfo(){
        return view('admin.manages.add-client-info');
    }
    public function saveClientInfo(Request $request){
        $client = new Client();
        $client->f_client_name = $request->f_client_name;
        $client->f_client_location = $request->f_client_location;
        $client->f_client_feedback = $request->f_client_feedback;
        $client->s_client_name = $request->s_client_name;
        $client->s_client_location = $request->s_client_location;
        $client->s_client_feedback = $request->s_client_feedback;
        $client->t_client_name = $request->t_client_name;
        $client->t_client_location = $request->t_client_location;
        $client->t_client_feedback = $request->t_client_feedback;
        $client->save();
        return redirect('manage-client-info')->with('success','Successfully client Info Added to Database');
    }
    public function manageClientInfo(){
        return view('admin.manages.manage-client',[
            'clients' => Client::all()
        ]);
    }
    public function editClientInfo($id){
        $client = Client::find($id);
        return view('admin.manages.edit-client-info',[
            'client'=> $client
        ]);
    }
    public function updateClientInfo(Request $request){
        $client = Client::find($request->client_id);
        $client->f_client_name = $request->f_client_name;
        $client->f_client_location = $request->f_client_location;
        $client->f_client_feedback = $request->f_client_feedback;
        $client->s_client_name = $request->s_client_name;
        $client->s_client_location = $request->s_client_location;
        $client->s_client_feedback = $request->s_client_feedback;
        $client->t_client_name = $request->t_client_name;
        $client->t_client_location = $request->t_client_location;
        $client->t_client_feedback = $request->t_client_feedback;
        $client->save();
        return redirect('manage-client-info')->with('success','Successfully client Info Updated to Database');
    }
    public function footerInfo(){
        return view('admin.manages.add-footer-info');
    }
    public function saveFooterInfo(Request $request){
        $footer = new Copyright();
        $footer->copyright = $request->copyright;
        $footer->save();
        return redirect('manage-footer-info')->with('success','Footer Info Added');
    }
    public function manageFooterInfo(){
        return view('admin.manages.manage-footer',[
            'copyrights'=>Copyright::all()
        ]);
    }
    public function editFooterInfo($id){
        $copyright = Copyright::find($id);
        return view('admin.manages.edit-footer-info',[
            'copyright'=>$copyright
        ]);
    }
    public function updateFooterInfo(Request $request){
        $copyright = Copyright::find($request->copyright_id);
        $copyright->copyright = $request->copyright;
        $copyright->save();
        return redirect('manage-footer-info')->with('success','Footer Info Updated');
    }
    public function aboutInfo(){
        return view('admin.manages.add-about');
    }
    public function saveAboutInfo(Request $request){
        $about = new About();
        $about->about = $request->about;
        $about->about_pic = $this->saveImage($request,'about_pic');
        $about->save();
        return redirect('manage-about-info')->with('success','Successfully About Info Added');
    }
    public function manageAboutInfo(){
        return view('admin.manages.manage-about',[
            'abouts'=>About::all()
        ]);
    }
    public function editAboutInfo($id){
        $about = About::find($id);
        return view('admin.manages.edit-about',[
           'about'=>$about
        ]);
    }
    public function updateAboutInfo(Request $request){
        $about = About::find($request->about_id);
        $about->about = $request->about;
        if($request->file('about_pic')){
            if($about->about_pic){
                unlink($about->about_pic);
            }
            $about->about_pic = $this->saveImage($request,'about_pic');
        }
        $about->save();
        return redirect('manage-about-info')->with('success','Successfully About Info Updated');
    }
    public function tnc(){
        return view('admin.manages.add-tnc');
    }
    public function saveTnc(Request $request){
        $tc = new TC();
        $tc->tnc = $request->tnc;
        $tc->save();
        return redirect('manage-tnc-info')->with('success','Successfully Terms & Condition Added');
    }
    public function manageTnc(){
        return view('admin.manages.manage-tnc',[
            'tcs'=>TC::all()
        ]);
    }
    public function editTnc($id){
        $tc = TC::find($id);
        return view('admin.manages.edit-tnc',[
            'tc'=>$tc
        ]);
    }
    public function updateTnc(Request $request){
        $tc = TC::find($request->tc_id);
        $tc->tnc = $request->tnc;
        $tc->save();
        return redirect('manage-tnc-info')->with('success','Successfully Terms & Condition Updated');
    }
    public function faq(){
        return view('admin.manages.add-faq');
    }
    public function saveFaq(Request $request){
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect('manage-faq-info')->with('success','Successfully Frequently Asked Question Added');
    }
    public function manageFaq(){
        return view('admin.manages.manage-faq',[
            'faqs'=>Faq::all()
        ]);
    }
    public function editFaq($id){
        $faq = Faq::find($id);
        return view('admin.manages.edit-faq',[
            'faq'=>$faq
        ]);
    }
    public function updateFaq(Request $request){
        $faq = Faq::find($request->faq_id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect('manage-faq-info')->with('success','Successfully Frequently Asked Question Updated');
    }
    public function deleteFaq(Request $request){
        $faq = Faq::find($request->faq_id);
        $faq->delete();
        return redirect('manage-faq-info')->with('success','Successfully Frequently Asked Question Deleted from Database');
    }
    public function policy(){
        return view('admin.manages.add-policy');
    }
    public function savePolicy(Request $request){
        $policy = new Policy();
        $policy->ppolicy = $request->ppolicy;
        $policy->save();
        return redirect('manage-policy')->with('success','Successfully Privacy & Policy Added');
    }
    public function managePolicy(){
        return view('admin.manages.manage-policy',[
            'policies'=>Policy::all()
        ]);
    }
    public function editPolicy($id){
        $policy = Policy::find($id);
        return view('admin.manages.edit-policy',[
            'ppolicy'=>$policy
        ]);
    }
    public function updatePolicy(Request $request){
        $policy = Policy::find($request->policy_id);
        $policy->ppolicy = $request->ppolicy;
        $policy->save();
        return redirect('manage-privacy-policy-info')->with('success','Successfully Privacy & Policy Updated');
    }

}
