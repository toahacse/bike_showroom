<?php

namespace App\Http\Controllers;

use App\Bike;
use App\Buy_bike;
use App\Contact;
use App\Images;
use App\Sale_Bike;
use App\test;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use DB;
use Faker\Provider\DateTime;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function imageUpload(){
        return view('admin.home.test');
    }
    public function new_imageUpload(Request $request){
        $imag = new Images();

        $views = Images::all();
        $bike_images  =  $request->file('images');
        foreach ($bike_images as $bike_image){
            $bike_image_names        =  $bike_image->getClientOriginalName();
            $path = 'bike-images/';
            $bike_image->move($path, $bike_image_names);
            $arr[]=$path.$bike_image_names;

        }
        $test = implode('|', $arr);
        $imag->images = $test;
        $imag->save();
        return redirect('/imageUpload');

    }
    public function imageUploadView(){
        $views = Images::all();
        return view('admin.home.test1',['views'=>$views]);
    }


        //Web Admin//

    public function index()
    {
        $bikes = Bike::all();
        return view('admin.home.home',[
            'bikes'=>$bikes
        ]);
    }

    public function addBike()
    {
        return view('admin.bike.addBike');
    }



    public function newBike(Request $request){
//        request()->validate([
//            'bike_image' => 'required',
//        ]);

        $bike_image             =  $request->file('bike_image');
        $bike_image_name        =  $bike_image->getClientOriginalName();
        $bike_image_directory   =  'bike-images/';
        $bike_image_url         =   $bike_image_directory.$bike_image_name;
        $bike_image->move($bike_image_directory, $bike_image_name);

        $bike = new Bike();
        $bike->bike_image = $bike_image_url;
        $bike->brand = $request->brand;
        $bike->model = $request->model;
        $bike->price = $request->price;
        $bike->km_run = $request->km_run;
        $bike->description = $request->description;
        $bike->location = $request->location;
        $bike->number = $request->number;
        $bike->publication_status = $request->publication_status;

        $bike->save();
        return redirect('/Add-Bike') ->with('massege','Bike Info Save Successfully');
    }

    public function manageBike(){
        $bikes = Bike::all();
        return view('admin.bike.manage_bike',['bikes'=>$bikes]);
    }
    public function unpublishedBike($id){
        $bike = Bike::find($id);
        $bike->publication_status=0;
        $bike->save();
        return redirect('/Manage-Bike') ->with('massege','Bike Info Unpublished');
    }
    public function publishedBike($id){
        $bike = Bike::find($id);
        $bike->publication_status=1;
        $bike->save();
        return redirect('/Manage-Bike') ->with('massege','Bike Info Published');
    }

    public function deleteBike($id){
        $bike = Bike::find($id);
        $test = $bike->bike_image;
        @unlink($test);
        $bike->delete();
        return redirect('/Manage-Bike') ->with('massege','Bike Info Delete Successfully!');
    }
    public function delete_comment($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/user_comments');
    }
    public function editeBike($id){
        $bike = Bike::find($id);
        return view('admin.bike.edit_bike',[
            'bike'=>$bike
        ]);
    }

    public function updateBike(Request $request){

        $bike_image= $request->file('bike_image');
        if($bike_image){

            $bike = Bike::find($request->bike_id);
            unlink($bike->bike_image);
            $bike_image             =  $request->file('bike_image');
            $bike_image_name        =  $bike_image->getClientOriginalName();
            $bike_image_directory   =  'bike-images/';
            $bike_image_url         =   $bike_image_directory.$bike_image_name;
            $bike_image->move($bike_image_directory, $bike_image_name);

            $bike->bike_image = $bike_image_url;
            $bike->brand = $request->brand;
            $bike->model = $request->model;
            $bike->price = $request->price;
            $bike->km_run = $request->km_run;
            $bike->description = $request->description;
            $bike->location = $request->location;
            $bike->number = $request->number;
            $bike->publication_status = $request->publication_status;
            $bike->save();
            return redirect('/Manage-Bike') ->with('massege','Bike Info Update Successfully!');

        }else{
            $bike = Bike::find($request->bike_id);

            $bike->brand = $request->brand;
            $bike->model = $request->model;
            $bike->price = $request->price;
            $bike->km_run = $request->km_run;
            $bike->description = $request->description;
            $bike->location = $request->location;
            $bike->number = $request->number;
            $bike->publication_status = $request->publication_status;
            $bike->save();
            return redirect('/Manage-Bike') ->with('massege','Bike Info Update Successfully!');
        }
    }

    public function userComments(){
        $contacts = Contact::all();
        return view('admin.comment.user_comment',['contacts'=>$contacts]);
    }


            //Document Admin//

    public function document_entry_index()
    {
        return view('admin.document.home.home');
    }

    public function buy_bike()
    {
        return view('admin.document.bike.add_bike');
    }


    public function show_all_bike()
    {

        $bikes = Buy_bike::all();
        return view('admin.document.bike.manage_bike',[
            'bikes'=>$bikes,
        ]);
    }

    public function show_all_sales()
    {
        $bikes = Sale_Bike::all();
        return view('admin.document.bike.show_sales_bike',['bikes'=>$bikes]);
    }


            //Stock Admin//

    public function stock_management_index()
    {
        $sales = Sale_Bike::all();
        $bikes = Buy_bike::all();
        return view('admin.stock.home.home',[
            'bikes'=>$bikes,
            'sales'=>$sales,
        ]);
    }

    public function total_stock()
    {
        $bikes = Bike::all();
        return view('admin.stock.bike.stock',['bikes'=>$bikes]);
    }


    public function total_buyer_bike1()
    {
        $bikes = Buy_bike::all();
        return view('admin.stock.bike.stock',[
            'bikes'=>$bikes,
        ]);
    }

    public function total_sales()
    {
        $bikes = Bike::all();
        return view('admin.stock.bike.stock',['bikes'=>$bikes]);
    }
    public function profit()
    {
        $buy_bike1 = Buy_bike::all();
        $sales1 = Sale_Bike::all();
        $buy_bike = Buy_bike::all();
        $sales = Sale_Bike::all();

        return view('admin.stock.profit.profit',[
            'buy_bike1'=>$buy_bike1,
            'sales1'=>$sales1,
            'buy_bike'=>$buy_bike,
            'sales'=>$sales
        ]);
    }

    public function profit_search(Request $request){
        $start = $request->start_date;
        $end = $request->end_date;


        $buy_bike1 = Buy_bike::all();
        $sales1 = Sale_Bike::all();
        $buy_bike = Buy_bike::all();
        $sales = Sale_Bike::whereBetween('date',[$start, $end])->get();

        return view('admin.stock.profit.profit1',[
            'buy_bike1'=>$buy_bike1,
            'sales1'=>$sales1,
            'buy_bike'=>$buy_bike,
            'sales'=>$sales
        ]);



    }


}
