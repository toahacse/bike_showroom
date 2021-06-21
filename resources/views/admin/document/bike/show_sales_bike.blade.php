@extends('admin.stock_master')

@section('admin_body')

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Bike Sales Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                    <table id="salesBike" class="display" width="100%">
                        <thead>
                        <tr>
                            <td >SL</td>
                            <td >Bike No</td>
                            <td >Price</td>
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>View</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($bikes as $bike)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$bike->bike_no}}</td>
                                <td>{{$bike->price}}</td>
                                <td>{{$bike->name}}</td>
                                <td>{{$bike->number}}</td>
                                <td>{{$bike->address}}</td>
                                <td>
                                    <a href="{{ route('details_sale_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                        Details
                                    </a>
                                    <a href="{{ route('voucher_sale_bike', ['id'=>$bike->id]) }}" class="btn btn-primary btn-xs">
                                        Voucher
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('edit_sale_baik', ['id'=>$bike->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete_sale_bike', ['id'=>$bike->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure Delete this!!');" >
                                        <span class="glyphicon glyphicon-trash"></span>
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
