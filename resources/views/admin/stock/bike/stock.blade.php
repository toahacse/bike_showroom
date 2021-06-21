@extends('admin.stock_master')

@section('admin_body')

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">All Bike Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                    <table id="stockBike" class="display" width="100%">
                        <thead>
                        <tr>
                            <td >SL</td>
                            <td >Brand</td>
                            <td >Model</td>
                            <td>Price</td>
                            <td>Bike No</td>
                            <td>Date</td>
                            <td>View</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($bikes as $bike)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$bike->brand}}</td>
                                    <td>{{$bike->model}}</td>
                                    <td>{{$bike->price}} TK</td>
                                    <td>{{$bike->bike_no}}</td>
                                    <td>{{$bike->date}}</td>
                                    <td>
                                        <a href="{{ route('details_buy_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                            Details
                                        </a>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
@endsection
