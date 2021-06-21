@extends('admin.stock_master')

@section('admin_body')

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-info">Daily/Monthly/Yearly Profit</h3>
                </div>

                    <div class="panel-body">
                        <form action="{{ route('profit_search') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-row mb-3">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Start Date</label>
                                    <input type="date" class="form-control" name="start_date" multiple>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputPassword4">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword4"></label>
                                    <input type="submit" class="btn btn-success btn-block " name="ok" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Total Bike Profit Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>



                    <table id="profitBike" class="display" width="100%">
                        <thead>
                        <tr>
                            <td >SL</td>
                            <td >Bike no</td>
                            <td >Brand</td>
                            <td >Model</td>
                            <td >Sale</td>
                            <td >Buy</td>
                            <td>Profit</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        <?php
                        $sum=0;
                        $sum1=0;
                        $sum2=0;
                        ?>
                        <?php  $profit = 0 ?>
                        @foreach($buy_bike as $bike)
                            @foreach($sales as $sale)
                                @if($bike->bike_no==$sale->bike_no)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$bike->bike_no}}</td>
                                        <td>{{$bike->brand}}</td>
                                        <td>{{$bike->model}}</td>
                                        <td>{{$sale->price}}</td>
                                        <td>{{$bike->price}}</td>
                                        <td>{{ $sale->price - $bike->price}} <?php
                                            $sum1= $sum1+$sale->price;
                                            $sum2= $sum2+$bike->price;
                                            $sum = $sum+($sale->price - $bike->price)?></td>
                                    </tr>
                                @endif
                            @endforeach

                        @endforeach
                        </tbody>
                    </table>

                    <div class="row mt-5" style="margin-top: 30px">
                        <div class="col-md-4">
                            <div class="panel panel-green">
                                <div class="panel-body">
                                    <h4 class="text-center">Total Sales: {{$sum1}}  Tk</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-green">
                                <div class="panel-body">
                                    <h4 class="text-center">Total Buy: {{$sum2}}  Tk</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-green">
                                <div class="panel-body">
                                    <h4 class="text-center">Total Profit: {{$sum}}  Tk</h4>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>

@endsection
