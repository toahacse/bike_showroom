@extends('admin.stock_master')

@section('admin_body')

    <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="text-center">Bike Details Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>

                    <table class="table-bordered col-md-8 col-md-offset-2" style="margin-bottom: 50px" width="100%">
                        <tr>
                            <th class="text-center text-light  bg-primary" style="padding: 10px" colspan="2"><h4>Bike Info</h4></th>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Brand</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->brand}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Model</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->model}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">bike no</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->bike_no}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">price</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->price}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">color</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->color}}</td>
                        </tr>
                        <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">date</th>
                            <td class="text-center text-capitalize" style="padding: 8px">{{$bike->date}}</td>
                        </tr>
                    </table>


                    <table class="table-bordered col-md-10 col-md-offset-1" style="margin-bottom: 50px" width="100%">
                        <tr>
                            <th class="text-center text-light  bg-primary" style="padding: 10px" colspan="2"><h4>Documents Info</h4></th>
                        </tr>
                        @empty(!$bike->smart_card)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Smart Card</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->smart_card)}}"> <img src="{{asset($bike->smart_card)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->text_token)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">text token</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->text_token)}}"> <img src="{{asset($bike->text_token)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->insurance)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">insurance</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->insurance)}}"> <img src="{{asset($bike->insurance)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->house_copy)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">house copy</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->house_copy)}}"> <img src="{{asset($bike->house_copy)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->blue_book)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">blue book</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->blue_book)}}"> <img src="{{asset($bike->blue_book)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->acknowledge_slip)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">acknowledge slip</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->acknowledge_slip)}}"> <img src="{{asset($bike->acknowledge_slip)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->stamp)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">stamp</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->stamp)}}"> <img src="{{asset($bike->stamp)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->nid_card)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">nid card</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                                <a href="{{asset($bike->nid_card)}}"> <img src="{{asset($bike->nid_card)}}" height="60px" width="60px"></a>
                            </td>
                            </tr>
                        @endempty

                        @empty(!$bike->smart_card1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">Smart Card</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->text_token1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">text token</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->insurance1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">insurance</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->house_copy1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">house copy</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->blue_book1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">blue book</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->acknowledge_slip1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">acknowledge slip</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
                        @empty(!$bike->nid_card1)
                            <tr>
                            <th class="text-center text-capitalize" style="padding: 8px">nid card</th>
                            <td class="text-center text-capitalize" style="padding: 8px">
                               yes
                            </td>
                            </tr>
                        @endempty
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

                    <table class="table-bordered col-md-10 col-md-offset-1" style="margin-bottom: 50px" width="100%">
                        <tr>
                            <th class="text-center text-light  bg-primary" style="padding: 10px" colspan="2"><h4>Media Info</h4></th>
                        </tr>
                        @empty(!$bike->media_name)
                            <tr>
                                <th class="text-center text-capitalize" style="padding: 8px">media name</th>
                                <td class="text-center text-capitalize" style="padding: 8px">{{$bike->media_name}}</td>
                            </tr>
                        @endempty
                        @empty(!$bike->media_number)
                            <tr>
                                <th class="text-center text-capitalize" style="padding: 8px">media Contact number</th>
                                <td class="text-center text-capitalize" style="padding: 8px">{{$bike->media_number}}</td>
                            </tr>
                        @endempty
                        @empty(!$bike->media_address)
                            <tr>
                                <th class="text-center text-capitalize" style="padding: 8px">media address</th>
                                <td class="text-center text-capitalize" style="padding: 8px">{{$bike->media_address}}</td>
                            </tr>
                        @endempty

                    </table>

                </div>
            </div>


        </div>
    </div>
@endsection
