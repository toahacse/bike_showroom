@extends('admin.admin-master')

@section('admin_body')
    <h1 class="page-header text-center">Website Dashboard</h1>

    <div class="row">


        <form action="{{ route('new_imageUpload') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="images[]" multiple>
            <input type="submit" name="ok">
        </form>

    </div>
@endsection
