@extends('admin.admin-master')

@section('admin_body')
    <h1 class="page-header text-center">Website Dashboard</h1>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            @php($i=0)
                            @foreach($bikes as $bike)
                                @php($i+=1)
                            @endforeach
                            <div class="huge">{{$i++}}</div>
                            <div>Total Bike</div>
                        </div>
                    </div>
                </div>
                <a href="{{asset('/Manage-Bike')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


    </div>
@endsection
