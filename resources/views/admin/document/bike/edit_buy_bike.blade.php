@extends('admin.document_master')

@section('admin_body')
    <div class="row" style="margin-bottom: 100px;">
        <h3>Update Bike Info</h3>
        <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
        <hr>
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('update_buy_bike') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="inputEmail4">Brand</label>
                                <input type="text" class="form-control" name="brand" value="{{ $bike->brand }}">
                                <input type="hidden" class="form-control" name="buy_bike_id" value="{{ $bike->id }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Model</label>
                                <input type="text" class="form-control" name="model" value="{{ $bike->model }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Bike No.</label>
                                <input type="text" class="form-control" name="bike_no" value="{{ $bike->bike_no }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $bike->price }}">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Color</label>
                                <input type="text" class="form-control" name="color" value="{{ $bike->color }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ $bike->date }}">
                            </div>
                        </div>

                        {{--DOCUMENTS INFORMATION--}}

                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="padding-top: 20px">
                                    <i class="fa fa-file"></i>
                                    Include Documetns<span style="font-size: 15px;">
                                       (If you want to include the file, then click on the
                                       <a class="text-danger h4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                   Add
                               </a> button)</span></h4>

                                <hr/>
                                <div class="collapse" id="collapseExample">
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Smart Card</label>
                                            <input type="file" class="form-control" name="smart_card" multiple>
                                            @empty(!$bike->smart_card)
                                            <center><img src="{{ asset($bike->smart_card) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Text Token</label>
                                            <input type="file" class="form-control" name="text_token">
                                            @empty(!$bike->text_token)
                                                <center><img src="{{ asset($bike->text_token) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Insurance</label>
                                            <input type="file" class="form-control" name="insurance">
                                            @empty(!$bike->insurance)
                                                <center><img src="{{ asset($bike->insurance) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">House Copy</label>
                                            <input type="file" class="form-control" name="house_copy">
                                            @empty(!$bike->house_copy)
                                                <center><img src="{{ asset($bike->house_copy) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Blue Book</label>
                                            <input type="file" class="form-control" name="blue_book">
                                            @empty(!$bike->blue_book)
                                                <center><img src="{{ asset($bike->blue_book) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Acknowledge Slip</label>
                                            <input type="file" class="form-control" name="acknowledge_slip">
                                            @empty(!$bike->acknowledge_slip)
                                                <center><img src="{{ asset($bike->acknowledge_slip) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stamp</label>
                                            <input type="file" class="form-control" name="stamp">
                                            @empty(!$bike->stamp)
                                                <center><img src="{{ asset($bike->stamp) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">NID Card</label>
                                            <input type="file" class="form-control" name="nid_card">
                                            @empty(!$bike->nid_card)
                                                <center><img src="{{ asset($bike->nid_card) }}" height="60px" width="60px" /></center>
                                            @endempty
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="smart_card1" {{$bike->smart_card1 ? 'checked':''}} value="Smart Card">
                                        <label class="form-check-label" for="exampleCheck1">Smart Card</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="text_token1" {{$bike->text_token1 ? 'checked':''}} value="Text Token">
                                        <label class="form-check-label" for="exampleCheck1">Text Token</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="insurance1" {{$bike->insurance1 ? 'checked':''}} value="Insurance">
                                        <label class="form-check-label" for="exampleCheck1">Insurance</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="house_copy1" {{$bike->house_copy1 ? 'checked':''}} value="House Copy">
                                        <label class="form-check-label" for="exampleCheck1">House Copy</label>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="blue_book1" {{$bike->blue_book1 ? 'checked':''}} value="Blue Book">
                                        <label class="form-check-label" for="exampleCheck1">Blue Book</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="acknowledge_slip1" {{$bike->acknowledge_slip1 ? 'checked':''}} value="Acknowledge Slip">
                                        <label class="form-check-label" for="exampleCheck1">Acknowledge Slip</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="stamp1" {{$bike->stamp1 ? 'checked':''}} value="Stamp">
                                        <label class="form-check-label" for="exampleCheck1">Stamp</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="checkbox" name="nid_card1" {{$bike->nid_card1 ? 'checked':''}} value="NID Card">
                                        <label class="form-check-label" for="exampleCheck1">NID Card</label>
                                    </div>
                                </div>

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
                                <input type="text" class="form-control" name="name" value="{{ $bike->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone Number</label>
                                <input type="number" class="form-control" name="number" value="{{ $bike->number }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $bike->address }}">
                            </div>
                        </div>

                        {{--MEDIA INFORMATION--}}

                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="padding-top: 20px"><i class="fa fa-user"></i> Media Info</h4><hr/>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" name="media_name" value="{{ $bike->media_name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone Number</label>
                                <input type="number" class="form-control" name="media_number" value="{{ $bike->media_number }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Address</label>
                                <input type="text" class="form-control" name="media_address" value="{{ $bike->media_address }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-success btn-block " name="ok" value="Update Bike Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection