<?php

namespace App\Http\Controllers;

use App\Bike;
use App\Contact;
use Illuminate\Http\Request;
use DB;

class frontEndController extends Controller
{
    public function index(){

        $bikes = Bike::where('publication_status', 1)
            ->orderBy('id','DESC')
            ->take(4)
            ->get();


        return view('front-end.home.home',[
            'bikes'=>$bikes,
        ]);
    }

    public function about(){
        return view('front-end.about.about');
    }

    public function shop(){
        $bikes = Bike::where('publication_status', 1)
                    ->orderBy('id','DESC')
                    ->get();
        return view('front-end.shop.shop',[
            'bikes'=>$bikes
        ]);
    }

    public function service(){
        return view('front-end.service.service');
    }
    public function contact_us(){
        return view('front-end.contact_us.contact_us');
    }
    public function bike_detais($id){
        $bike = Bike::find($id);
        return view('front-end.detais.bike_detais',[
            'bike'=>$bike
        ]);
    }

    public function contact(Request $request){
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->massage = $request->massage;
        $contact->save();
        return redirect('/contact_us') ->with('massege','Thank You');
    }
}
