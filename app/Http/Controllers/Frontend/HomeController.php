<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function concept()
    {
        return view('frontend.concept');
    }

    public function district()
    {
        return view('frontend.district');
    }

    public function masterplan()
    {
        return view('frontend.masterplan');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function introduction(){
        return view('frontend.introduction');
    }

    public function location(){
        return view('frontend.location');
    }

    public function developer(){
        return view('frontend.developer');
    }

    public function slow(){
        return view('frontend.slow');
    }

    public function less(){
        return view('frontend.less');
    }

    public function towerplans($tabname){
        if($tabname =="residence"){
            $tabresidence = "active";
            $tabsoho = "";
            $taboffice = "";

        }
        if($tabname =="soho"){
            $tabresidence = "";
            $tabsoho = "active";
            $taboffice = "";

        }
        if($tabname =="office"){
            $tabresidence = "";
            $tabsoho = "";
            $taboffice = "active";

        }

        return view('frontend.towerplans', compact('tabresidence', 'tabsoho', 'taboffice'));
    }

    public function facilities(){
        return view('frontend.facilities');
    }

    public function idea(){
        return view('frontend.idea');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function galleryDetail($type){
        return view('frontend.gallery-detail', compact('type'));
    }

    public function planMaster(){
        return view('frontend.plan-master');
    }

    public function planFloor(){
        return view('frontend.plan-floor');
    }

    public function planUnit(){
        return view('frontend.plan-unit');
    }

    public function features(){
        return view('frontend.features');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function saveContactUs(Request $request){
//        dd(Carbon::now('Asia/Jakarta')->toDateTimeString());

        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'email'     => 'required|regex:/^\S*$/u|email',
            'subject'          => 'required',
            'message'          => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

        $data = ContactMessage::create([
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'subject'         => $request->input('subject'),
            'message'       => $request->input('message'),
            'created_at'    => Carbon::now('Asia/Jakarta')->toDateTimeString()
        ]);

        Session::flash('success', 'Thank you for Contacting us!');
        return redirect()->route('frontend.contact_us');
    }

    public function downloadCatalogue(){
        return response()->download(public_path('marc-catalogue.pdf'));
    }
}
