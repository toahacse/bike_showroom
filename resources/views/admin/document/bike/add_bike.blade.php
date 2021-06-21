@extends('admin.document_master')

@section('admin_body')
   <div class="row" style="margin-bottom: 100px;">
       <h3>Add Bike Info</h3>
       <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
       <hr>
       <div class="col-md-10 col-md-offset-1">
           <div class="card">
               <div class="card-body">

                   <form action="{{ route('new_buy_bike') }}" method="POST" enctype="multipart/form-data">
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
                               <input type="text" class="form-control" required name="brand" placeholder="Ex: YAMAHA">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputPassword4">Model</label>
                               <input type="text" class="form-control" name="model" required placeholder="Ex: Yamaha-ss-00">
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Bike No.</label>
                               <input type="text" class="form-control" name="bike_no" required placeholder="Ex: CH-M-3456 45">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputPassword4">Price</label>
                               <input type="number" class="form-control" name="price" required placeholder="Ex: 100000 TK">
                           </div>
                       </div>
                       <div class="form-row mb-3">
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Color</label>
                               <input type="text" class="form-control" name="color" required placeholder="Ex: red">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputPassword4">Date</label>
                               <input type="date" class="form-control" name="date" required placeholder="mm/dd/yyy">
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
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputPassword4">Text Token</label>
                                           <input type="file" class="form-control" name="text_token">
                                       </div>
                                   </div>
                                   <div class="form-row mb-3">
                                       <div class="form-group col-md-6">
                                           <label for="inputEmail4">Insurance</label>
                                           <input type="file" class="form-control" name="insurance">
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputPassword4">House Copy</label>
                                           <input type="file" class="form-control" name="house_copy">
                                       </div>
                                   </div>
                                   <div class="form-row mb-3">
                                       <div class="form-group col-md-6">
                                           <label for="inputEmail4">Blue Book</label>
                                           <input type="file" class="form-control" name="blue_book">
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputPassword4">Acknowledge Slip</label>
                                           <input type="file" class="form-control" name="acknowledge_slip">
                                       </div>
                                   </div>
                                   <div class="form-row mb-3">
                                       <div class="form-group col-md-6">
                                           <label for="inputEmail4">Stamp</label>
                                           <input type="file" class="form-control" name="stamp">
                                       </div>
                                       <div class="form-group col-md-6">
                                           <label for="inputPassword4">NID Card</label>
                                           <input type="file" class="form-control" name="nid_card">
                                       </div>
                                   </div>
                               </div>

                           </div>

                           </div>

                       <div class="row">
                           <div class="col-md-12">

                               <div class="form-row mb-3">
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="smart_card1" value="Smart Card">
                                       <label class="form-check-label" for="exampleCheck1">Smart Card</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="text_token1" value="Text Token">
                                       <label class="form-check-label" for="exampleCheck1">Text Token</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="insurance1" value="Insurance">
                                       <label class="form-check-label" for="exampleCheck1">Insurance</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="house_copy1" value="House Copy">
                                       <label class="form-check-label" for="exampleCheck1">House Copy</label>
                                   </div>
                               </div>

                               <div class="form-row mb-3">
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="blue_book1" value="Blue Book">
                                       <label class="form-check-label" for="exampleCheck1">Blue Book</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="acknowledge_slip1" value="Acknowledge Slip">
                                       <label class="form-check-label" for="exampleCheck1">Acknowledge Slip</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="stamp1" value="Stamp">
                                       <label class="form-check-label" for="exampleCheck1">Stamp</label>
                                   </div>
                                   <div class="form-group col-md-3">
                                       <input type="checkbox" name="nid_card1" value="NID Card">
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
                               <input type="text" class="form-control" name="name" required placeholder="Ex: Mr.X">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputPassword4">Phone Number</label>
                               <input type="number" class="form-control" name="number" required placeholder="Ex: 01xxxxxxxxx">
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="inputEmail4">Address</label>
                               <input type="text" class="form-control" name="address" required placeholder="Ex: Muradpor,Chattogram.">
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
                               <input type="text" class="form-control" name="media_name" placeholder="Ex: Mr.X">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputPassword4">Phone Number</label>
                               <input type="number" class="form-control" name="media_number" placeholder="Ex: 01xxxxxxxxx">
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="inputEmail4">Address</label>
                               <input type="text" class="form-control" name="media_address" placeholder="Ex: Muradpor,Chattogram.">
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <input type="submit" class="btn btn-success btn-block " name="ok" value="Save Bike Info">
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection