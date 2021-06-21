@extends('admin.admin-master')

@section('admin_body')

<div class="row">
    <div class="col-md-12" style="margin-top: 30px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">User Massages</h3>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                <table id="bikeManage" class="display table-bordered" width="100%">
                    <thead>
                    <tr class="bg-info">
                        <th >SL</th>
                        <th >Name</th>
                        <th >Massage</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->massage}}</td>
                        <td>{{$contact->number}}</td>
                        <td>{{$contact->email}}</td>
                        <td class="text-center">
                            <a href="{{ route('delete_comment', ['id'=>$contact->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure Delete this!!');" >
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
