
@extends('admin.stock_master')

@section('admin_body')


    @php($i=0)
    @foreach($bikes as $bike)
        <?php $i++?>
    @endforeach

    @php($j=0)
    @foreach($bikes as $bike)
        @if($bike->sales_status==0)
            <?php $j++?>
        @endif
    @endforeach

    @php($k=0)
    @foreach($sales as $sale)
        <?php $k++?>
    @endforeach


    <h1 class="page-header text-center">Stock Dashboard</h1>

    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4>Total Buy Bikes: <span class="text-light h3"> {{$i}}</span></h4>
                </div>
                <a href="{{asset('/total_buyer_bike')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4>Total Stock Bikes: <span class="text-light h3"> {{$j}}</span></h4>
                </div>
                <a href="{{asset('/show_all_bike')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4>Total Sales Bikes: <span class="text-light h3"> {{$k}}</span></h4>
                </div>
                <a href="{{asset('/show_all_sales')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <hr>
@endsection
