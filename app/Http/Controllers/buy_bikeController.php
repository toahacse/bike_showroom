<?php

namespace App\Http\Controllers;

use App\Buy_bike;
use App\Sale_Bike;
use Illuminate\Http\Request;
use DB;
use PDF;

class buy_bikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new_buy_bike(Request $request){
        $buy_bike = new Buy_bike();

        $smart_card  =  $request->file('smart_card');
        if($smart_card) {
            $smart_card_image_name = $smart_card->getClientOriginalName();
            $smart_card_image_directory = 'buy_bike_images/';
            $smart_card_image_url = $smart_card_image_directory . $smart_card_image_name;
            $smart_card->move($smart_card_image_directory, $smart_card_image_name);
            $buy_bike->smart_card = $smart_card_image_url;
        }

        $text_token =  $request->file('text_token');
        if ($text_token){
            $text_token_image_name        =  $text_token->getClientOriginalName();
            $text_token_image_directory   =  'buy_bike_images/';
            $text_token_image_url         =   $text_token_image_directory.$text_token_image_name;
            $text_token->move($text_token_image_directory, $text_token_image_name);
            $buy_bike->text_token = $text_token_image_url;
        }


        $insurance  =  $request->file('insurance');
        if ($insurance){
            $insurance_image_name        =  $insurance->getClientOriginalName();
            $insurance_image_directory   =  'buy_bike_images/';
            $insurance_image_url         =   $insurance_image_directory.$insurance_image_name;
            $insurance->move($insurance_image_directory, $insurance_image_name);
            $buy_bike->insurance = $insurance_image_url;
        }



        $house_copy =  $request->file('house_copy');
        if ($house_copy){
            $house_copy_image_name        =  $house_copy->getClientOriginalName();
            $house_copy_image_directory   =  'buy_bike_images/';
            $house_copy_image_url         =   $house_copy_image_directory.$house_copy_image_name;
            $house_copy->move($house_copy_image_directory, $house_copy_image_name);
            $buy_bike->house_copy = $house_copy_image_url;
        }



        $blue_book =  $request->file('blue_book');
        if ($blue_book){
            $blue_book_image_name        =  $blue_book->getClientOriginalName();
            $blue_book_image_directory   =  'buy_bike_images/';
            $blue_book_image_url         =   $blue_book_image_directory.$blue_book_image_name;
            $blue_book->move($blue_book_image_directory, $blue_book_image_name);
            $buy_bike->blue_book = $blue_book_image_url;

        }



        $acknowledge_slip             =  $request->file('acknowledge_slip');
        if ($acknowledge_slip){
            $acknowledge_slip_image_name        =  $acknowledge_slip->getClientOriginalName();
            $acknowledge_slip_image_directory   =  'buy_bike_images/';
            $acknowledge_slip_image_url         =   $acknowledge_slip_image_directory.$acknowledge_slip_image_name;
            $acknowledge_slip->move($acknowledge_slip_image_directory, $acknowledge_slip_image_name);
            $buy_bike->acknowledge_slip = $acknowledge_slip_image_url;
        }



        $stamp             =  $request->file('stamp');
        if ($stamp){
            $stamp_image_name        =  $stamp->getClientOriginalName();
            $stamp_image_directory   =  'buy_bike_images/';
            $stamp_image_url         =   $stamp_image_directory.$stamp_image_name;
            $stamp->move($stamp_image_directory, $stamp_image_name);
            $buy_bike->stamp = $stamp_image_url;
        }



        $nid_card            =  $request->file('nid_card');
        if ($nid_card){
            $nid_card_image_name        =  $nid_card->getClientOriginalName();
            $nid_card_image_directory   =  'buy_bike_images/';
            $nid_card_image_url         =   $nid_card_image_directory.$nid_card_image_name;
            $nid_card->move($nid_card_image_directory, $nid_card_image_name);
            $buy_bike->nid_card = $nid_card_image_url;
        }



        $buy_bike->brand = $request->brand;
        $buy_bike->model = $request->model;
        $buy_bike->bike_no = $request->bike_no;
        $buy_bike->price = $request->price;
        $buy_bike->color = $request->color;
        $buy_bike->date = $request->date;



        $buy_bike->smart_card1 = $request->smart_card1;
        $buy_bike->text_token1 = $request->text_token1;
        $buy_bike->insurance1 = $request->insurance1;
        $buy_bike->house_copy1 = $request->house_copy1;
        $buy_bike->blue_book1 = $request->blue_book1;
        $buy_bike->acknowledge_slip1 = $request->acknowledge_slip1;
        $buy_bike->stamp1 = $request->stamp1;
        $buy_bike->nid_card1 = $request->nid_card1;
        $buy_bike->name = $request->name;
        $buy_bike->number = $request->number;
        $buy_bike->address = $request->address;
        $buy_bike->media_name = $request->media_name;
        $buy_bike->media_number = $request->media_number;
        $buy_bike->media_address = $request->media_address;
        $buy_bike->sales_status = 0;

        $buy_bike->save();
        return redirect('/buy_bike') ->with('massege','Bike Info Save Successfully');
    }

    public function edit_buy_baik($id){
        $bike = Buy_bike::find($id);
        return view('admin.document.bike.edit_buy_bike',[
            'bike'=>$bike
        ]);
    }



    public function delete_buy_bike($id){
//
//        DB::table('buy_bikes')
//            ->where('bike_no', $bike_no)
//            ->update(['sales_status' => 0]);

        $bike = Buy_bike::find($id);
        @unlink( $bike->smart_card);
        $bike->delete();
        return redirect('/show_all_bike');
    }
    public function details_buy_bike($id){
        $bike = Buy_bike::find($id);

        return view('admin.document.bike.show_details_buy_bike',['bike'=>$bike]);
    }
    public function details_sale_bike($id){
        $bike = Sale_Bike::find($id);
        return view('admin.document.bike.show_details_sale_bike',['bike'=>$bike]);
    }

    public function update_buy_bike(Request $request){
        $buy_bike = Buy_bike::find($request->buy_bike_id);

        $smart_card  =  $request->file('smart_card');
        if($smart_card) {
            $smart_card_image_name = $smart_card->getClientOriginalName();
            $smart_card_image_directory = 'buy_bike_images/';
            $smart_card_image_url = $smart_card_image_directory . $smart_card_image_name;
            $smart_card->move($smart_card_image_directory, $smart_card_image_name);
            $buy_bike->smart_card = $smart_card_image_url;
        }

        $text_token =  $request->file('text_token');
        if ($text_token){
            $text_token_image_name        =  $text_token->getClientOriginalName();
            $text_token_image_directory   =  'buy_bike_images/';
            $text_token_image_url         =   $text_token_image_directory.$text_token_image_name;
            $text_token->move($text_token_image_directory, $text_token_image_name);
            $buy_bike->text_token = $text_token_image_url;
        }


        $insurance  =  $request->file('insurance');
        if ($insurance){
            $insurance_image_name        =  $insurance->getClientOriginalName();
            $insurance_image_directory   =  'buy_bike_images/';
            $insurance_image_url         =   $insurance_image_directory.$insurance_image_name;
            $insurance->move($insurance_image_directory, $insurance_image_name);
            $buy_bike->insurance = $insurance_image_url;
        }



        $house_copy =  $request->file('house_copy');
        if ($house_copy){
            $house_copy_image_name        =  $house_copy->getClientOriginalName();
            $house_copy_image_directory   =  'buy_bike_images/';
            $house_copy_image_url         =   $house_copy_image_directory.$house_copy_image_name;
            $house_copy->move($house_copy_image_directory, $house_copy_image_name);
            $buy_bike->house_copy = $house_copy_image_url;
        }



        $blue_book =  $request->file('blue_book');
        if ($blue_book){
            $blue_book_image_name        =  $blue_book->getClientOriginalName();
            $blue_book_image_directory   =  'buy_bike_images/';
            $blue_book_image_url         =   $blue_book_image_directory.$blue_book_image_name;
            $blue_book->move($blue_book_image_directory, $blue_book_image_name);
            $buy_bike->blue_book = $blue_book_image_url;

        }



        $acknowledge_slip             =  $request->file('acknowledge_slip');
        if ($acknowledge_slip){
            $acknowledge_slip_image_name        =  $acknowledge_slip->getClientOriginalName();
            $acknowledge_slip_image_directory   =  'buy_bike_images/';
            $acknowledge_slip_image_url         =   $acknowledge_slip_image_directory.$acknowledge_slip_image_name;
            $acknowledge_slip->move($acknowledge_slip_image_directory, $acknowledge_slip_image_name);
            $buy_bike->acknowledge_slip = $acknowledge_slip_image_url;
        }


        $stamp             =  $request->file('stamp');
        if ($stamp){
            $stamp_image_name        =  $stamp->getClientOriginalName();
            $stamp_image_directory   =  'buy_bike_images/';
            $stamp_image_url         =   $stamp_image_directory.$stamp_image_name;
            $stamp->move($stamp_image_directory, $stamp_image_name);
            $buy_bike->stamp = $stamp_image_url;
        }

        $nid_card            =  $request->file('nid_card');
        if ($nid_card){
            $nid_card_image_name        =  $nid_card->getClientOriginalName();
            $nid_card_image_directory   =  'buy_bike_images/';
            $nid_card_image_url         =   $nid_card_image_directory.$nid_card_image_name;
            $nid_card->move($nid_card_image_directory, $nid_card_image_name);
            $buy_bike->nid_card = $nid_card_image_url;
        }

        $buy_bike->brand = $request->brand;
        $buy_bike->model = $request->model;
        $buy_bike->bike_no = $request->bike_no;
        $buy_bike->price = $request->price;
        $buy_bike->color = $request->color;
        $buy_bike->date = $request->date;



        $buy_bike->smart_card1 = $request->smart_card1;
        $buy_bike->text_token1 = $request->text_token1;
        $buy_bike->insurance1 = $request->insurance1;
        $buy_bike->house_copy1 = $request->house_copy1;
        $buy_bike->blue_book1 = $request->blue_book1;
        $buy_bike->acknowledge_slip1 = $request->acknowledge_slip1;
        $buy_bike->stamp1 = $request->stamp1;
        $buy_bike->nid_card1 = $request->nid_card1;
        $buy_bike->name = $request->name;
        $buy_bike->number = $request->number;
        $buy_bike->address = $request->address;
        $buy_bike->media_name = $request->media_name;
        $buy_bike->media_number = $request->media_number;
        $buy_bike->media_address = $request->media_address;
        $buy_bike->sales_status = 0;

        $buy_bike->save();
        return redirect('/show_all_bike') ->with('massege','Bike Info update Successfully');

    }


    public function sale_buy_bike($id){

        $bike = Buy_bike::find($id);
        return view('admin.document.bike.sale_buy_bike',['bike'=>$bike]);
    }

    public function new_sale_bike(Request $request){
        $sale = new Sale_Bike();

        DB::table('buy_bikes')
            ->where('bike_no', $request->bike_no)
            ->update(['sales_status' => 1]);




        $sale->bike_no = $request->bike_no;
        $sale->price = $request->price;
        $sale->name = $request->name;
        $sale->number = $request->number;
        $sale->address = $request->address;
        $sale->date = $request->date;
        $sale->save();

        return redirect('/show_all_sales') ->with('massege','Bike Sale Successfully');

    }
    public function delete_sale_bike($id){
        $sale = Sale_Bike::find($id);
        $sale->delete();
        return redirect('/show_all_sales') ->with('massege','Sale Bike Delete Successfully');
    }

    public function edit_sale_baik($id){
        $bike = Sale_Bike::find($id);
        return view('admin.document.bike.edit_sale_baik',[
            'bike'=>$bike
        ]);
    }

    public function update_sale_bike(Request $request){

        $sale = Sale_Bike::find($request->sale_bike_id);

        $sale->bike_no = $request->bike_no;
        $sale->price = $request->price;
        $sale->name = $request->name;
        $sale->number = $request->number;
        $sale->address = $request->address;
        $sale->date = $request->date;
        $sale->save();
        return redirect('/show_all_sales') ->with('massege','Sale Bike Update Successfully');
    }

    public function voucher_sale_bike($id){

        $sale = Sale_Bike::find($id);
        $pdf = PDF::loadView('admin.document.pdf.sale_pdf',[
            'sale'=>$sale,
        ]);

        return $pdf->stream('invoice.pdf');

//        return view('admin.document.pdf.sale_pdf');
    }
    public function voucher_buy_bike($id){
        $buy = Buy_bike::find($id);
        $pdf = PDF::loadView('admin.document.pdf.buy_pdf',[
            'buy'=>$buy,
        ]);

        return $pdf->stream('invoice.pdf');

//        return view('admin.document.pdf.sale_pdf');
    }
    

}
