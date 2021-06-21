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

                    <table id="allBike" class="display" width="100%">
                        <thead>
                        <tr>
                            <td >SL</td>
                            <td >Brand</td>
                            <td >Model</td>
                            <td>Price</td>
                            <td>Bike No</td>
                            <td>Date</td>
                            <td>View</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($bikes as $bike)
                            @if($bike->sales_status==0)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$bike->brand}}</td>
                                    <td>{{$bike->model}}</td>
                                    <td>{{$bike->price}} TK</td>
                                    <td>{{$bike->bike_no}}</td>
                                    <td>{{$bike->date}}</td>
                                    <td>
                                        <a href="{{ route('sale_buy_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                            Sale
                                        </a>
                                        <a href="{{ route('details_buy_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                            Details
                                        </a>
                                        <a href="{{ route('voucher_buy_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                            Voucher
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('edit_buy_baik', ['id'=>$bike->id]) }}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('delete_buy_bike', ['id'=>$bike->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure Delete this!!');" >
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
@endsection
