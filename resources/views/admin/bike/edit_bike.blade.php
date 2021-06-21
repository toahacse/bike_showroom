@extends('admin.admin-master')

@section('admin_body')

    <div class="row">
        <div class="col-md-offset-1 col-md-10" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center text-success">Update Bike Info</h3>
                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
                    <form action="{{ route('update-bike') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="bike_id" value="{{$bike->id}}"/>
                        <div class="form-group">
                            <label for="categoryDescription">Bike Image:</label>
                            <input type="file" name="bike_image" class="form-control" accept="image/*" /><br>
                          <img style="margin-left: 50px;" src="{{ asset($bike->bike_image) }}" height="60px" width="80px">
                        </div>

                        <div class="form-group">
                            <label>Brand:</label>
                            <input type="text" class="form-control" name="brand" value="{{$bike->brand}}" />
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Model:</label>
                            <input type="text" class="form-control" name="model" value="{{$bike->model}}" />
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Price:</label>
                            <input type="number" class="form-control" name="price" value="{{$bike->price}}" />
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Kilometers Run:</label>
                            <input type="text" class="form-control" name="km_run" value="{{$bike->km_run}}" />
                        </div>

                        <div class="form-group">
                            <label for="categoryDescription">Description:</label>
                            <textarea class="form-control" rows="5" cols="20" name="description">{{$bike->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="categoryDescription">Location:</label>
                            <input type="text" class="form-control" name="location" value="{{$bike->location}}" />
                        </div>

                        <div class="form-group">
                            <label for="categoryDescription">Mobile Number:</label>
                            <input type="text" class="form-control" name="number" value="{{$bike->number}}" />
                        </div>

                        <div class="form-group">
                            <label>Publication Status: </label>
                            <input type="radio" name="publication_status" {{$bike->publication_status == 1 ? 'checked':''}} value="1">Published
                            <input type="radio" name="publication_status" {{$bike->publication_status == 0 ? 'checked':''}} value="0">Unpublished
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="ok" value="Upade Bike Info" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
