@extends('admin.document_master')

@section('admin_body')
    <div class="row" style="margin-bottom: 100px;">
        <h3>Sale Bike Info</h3>
        <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
        <hr>
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('update_sale_bike') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        {{--BIKE INFORMATION--}}
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="fa fa-motorcycle fa-fw"></i> Bike Info</h4>
                                <hr>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Bike No.</label>
                                <input type="text" class="form-control" name="bike_no" readonly value="{{$bike->bike_no}}">
                                <input type="hidden" class="form-control" name="sale_bike_id" value="{{$bike->id}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Price</label>
                                <input type="number" class="form-control" name="price" value="{{$bike->price}}">
                            </div>
                        </div>

                        {{--PERSONAL INFORMATION--}}

                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="padding-top: 20px"><i class="fa fa-user"></i> Personal Info</h4><hr/>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$bike->name}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone Number</label>
                                <input type="number" class="form-control" name="number" value="{{$bike->number}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$bike->address}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Date</label>
                                <input type="date" class="form-control" name="date" value="{{$bike->date}}">
                            </div>
                        </div>

                        {{--MEDIA INFORMATION--}}

                        {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                        {{--<h4 style="padding-top: 20px"><i class="fa fa-user"></i> Media Info</h4><hr/>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-row">--}}
                        {{--<div class="form-group col-md-6">--}}
                        {{--<label for="inputEmail4">Name</label>--}}
                        {{--<input type="text" class="form-control" name="media_name" placeholder="Ex: Mr.X">--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-md-6">--}}
                        {{--<label for="inputPassword4">Phone Number</label>--}}
                        {{--<input type="number" class="form-control" name="media_number" placeholder="Ex: 01xxxxxxxxx">--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-row">--}}
                        {{--<div class="form-group col-md-12">--}}
                        {{--<label for="inputEmail4">Address</label>--}}
                        {{--<input type="text" class="form-control" name="media_address" placeholder="Ex: Muradpor,Chattogram.">--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success btn-block " name="ok" value="Update Sale Bike">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection