@extends('admin.admin-master')

@section('admin_body')

<div class="row">
    <div class="col-md-12" style="margin-top: 30px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Bike Info</h3>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                <table id="bikeManage" class="display" width="100%">
                    <thead>
                    <tr>
                        <td >SL</td>
                        <td >Brand</td>
                        <td >Model</td>
                        <td>Price</td>
                        <td>Image</td>
                        <td>Phone</td>
                        <td>Publication Status</td>
                        <td>Action</td>
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
                            <td><img src="{{$bike->bike_image}}" height="50px" width="50px"></td>
                            <td>{{$bike->number}}</td>
                            <td>{{$bike->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($bike->publication_status == 1)
                                    <a href="{{ route('unpublished_bike', ['id'=>$bike->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ route('published_bike', ['id'=>$bike->id]) }}" class="btn btn-warning btn-xs">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{ route('edit_baik', ['id'=>$bike->id]) }}" class="btn btn-success btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ route('delete_bike', ['id'=>$bike->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure Delete this!!');" >
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
