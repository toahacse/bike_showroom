@extends('admin.stock_master')

@section('admin_body')

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="text-center">Sale Bike Details Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                    <table class="table-bordered col-md-8 col-md-offset-2" style="margin-bottom: 50px" width="100%">
                        <tr>
                            <th class="text-center text-light  bg-primary" style="padding: 10px" colspan="2"><h4>Bike Info</h4></th>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Bike No</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->bike_no}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">sale price</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->price}} TK</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">date</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->date}}</td>
                        </tr>
                    </table>

                    <table class="table-bordered col-md-10 col-md-offset-1" style="margin-bottom: 50px" width="100%">
                        <tr>
                            <th class="text-center text-light  bg-primary" style="padding: 10px" colspan="2"><h4>Personal Info</h4></th>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">name</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->name}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Contact number</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->number}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">address</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->address}}</td>
                        </tr>
                    </table>

                </div>
            </div>


        </div>
    </div>
@endsection
