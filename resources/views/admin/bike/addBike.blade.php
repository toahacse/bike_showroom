@extends('admin.admin-master')

@section('admin_body')

    <div class="row">
    <div class="col-md-offset-1 col-md-10" style="margin-top: 30px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-success">Add Bike Info</h3>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">{{Session::get('massege')}}</h3>
                <form action="{{ route('new-bike') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}


                    <div class="form-group">
                        <label for="categoryDescription">Bike Image:</label>
                        <input type="file" name="bike_image" required class="form-control" accept="image/*" />
                    </div>

                    <div class="form-group">
                        <label>Brand:</label>
                        <input type="text" class="form-control" name="brand" required  placeholder="Ex: Yamaha"/>
                    </div>
                    <div class="form-group">
                        <label for="categoryDescription">Model:</label>
                        <input type="text" class="form-control" name="model" required placeholder="Ex: Yamaha FZ V3.0 FI"/>
                    </div>
                    <div class="form-group">
                        <label for="categoryDescription">Price:</label>
                        <input type="number" class="form-control" name="price" required placeholder="Ex: 100000 TK"/>
                    </div>
                    <div class="form-group">
                        <label for="categoryDescription">Kilometers Run:</label>
                        <input type="text" class="form-control" name="km_run" required  placeholder="Ex: 75-80"/>
                    </div>

                    <div class="form-group">
                        <label for="categoryDescription">Description:</label>
                        <textarea class="form-control" rows="5" cols="20" placeholder="Description" required name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categoryDescription">Location:</label>
                        <input type="text" class="form-control" name="location" required placeholder="Ex: Muradpor,Chattogram"/>
                    </div>

                    <div class="form-group">
                        <label for="categoryDescription">Mobile Number:</label>
                        <input type="text" class="form-control" name="number" required placeholder="Ex: 01874569023"/>
                    </div>

                    <div class="form-group">
                        <label>Publication Status: </label>
                        <input type="radio" name="publication_status" value="1">Published
                        <input type="radio" name="publication_status" value="0">Unpublished
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" name="ok" value="Save Bike Info" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
