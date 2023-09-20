@extends('layouts.admin.app')
@section('title')
Partner
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Partner
                    <a href="{{ url('admin/partner/create') }}" class="btn btn-danger btn-sm float-end">
                        Back
</a>
                </h3>
</div>

<div class="card-body">


<form action="{{ url('admin/partner') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">


<div class="mb-3">
<label>Title</label>
<input type="text" name="title"  class="form-control"/>
@error('title') <small class="text-white">{{ $message}}</small> @enderror
</div>

<div class="mb-3">
    <label>Url</label>
    <input type="text" name="url"  class="form-control"/>
    @error('url') <small class="text-white">{{ $message}}</small> @enderror
    </div>

<div class="mb-3">
<label>Upload Image </label>
<input type="file" name="image" class="form-control" required>
</div>


<div class="col-md-12 mb-3">
    <button type="submit" class="btn btn-primary float-end">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
