@extends('layouts.admin.app')
@section('title')
Latest News
@endsection
@section('content')
<script>
        var desc = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
<div class="row">
    <div class="col-md-12">                                                     
        <div class="card">
            <div class="card-header">
                <h3>Edit Partner
                    <a href="{{ url('admin/partner/edit') }}" class="btn btn-danger btn-sm float-end">
                        Back
</a>
                </h3>
</div>

<div class="card-body">

@if($errors->any())
<div class="alert alert-warning">
    @foreach($errors->all() as $error)
    <div>{{ $error }} </div>
    @endforeach
</div>
@endif

<form action="{{ url('admin/partner/'.$partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">


<div class="mb-3">
<label>Title</label>
<input type="text" name="title" value="{{ $partner->title }}" class="form-control"/>
@error('title') <small class="text-white">{{ $message}}</small> @enderror
</div>

<div class="mb-3">
    <label>Url</label>
    <input type="text" name="url" value="{{ $partner->url }}" class="form-control"/>
    @error('url') <small class="text-white">{{ $message}}</small> @enderror
    </div>

<div class="mb-3">
<label>Image</label>
                                                <br>
                                                <div align="center">
                                                    <img id="img{{ $partner->id }}"
                                                        src="{{ asset($partner->image) }}" alt=""
                                                        style="width: 50%">
                                                </div>
                                                <br>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" accept="image/*"
                                                        id="customFile"
                                                        onchange="desc(event,'img{{ $partner->id }}');"
                                                        name="image">
                                           
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file...</label>
                                                </div>
                                                <br>
</div>
<div>



</div>


<div class="col-md-12 mb-3">
    <button type="btn" class="btn btn-primary float-end">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
