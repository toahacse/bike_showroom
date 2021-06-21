@extends('admin.admin-master')

@section('admin_body')
    <h1 class="page-header text-center">Website Dashboard</h1>

    <div class="row">
<table border="1">
    @php($i=1)
    <tr>
        <th>SL</th>
        <th>img</th>
    </tr>

    @foreach($views as $view)
        <tr>
            <td>{{$i++}}</td>
            <td>
                <?php
                $tests = $view->images;
                $imgs = ( explode('|',$tests));
                ?>
                @foreach($imgs as $img)
                    <img src="{{asset($img)}}" height="100px" width="100px" style="padding: 10px"><br/>
                @endforeach
            </td>

        </tr>
    @endforeach
</table>

    </div>
@endsection