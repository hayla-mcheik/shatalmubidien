@extends('layouts.admin.app')
@section('title')
Partner
@endsection
@section('content')

<div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h4>Partner
                            <a href="{{ url('admin/partner/create') }}" class="btn btn-primary btn-sm float-end">
                                Add Partner</a></h4>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table tb-table tb-dbholder">
            <thead>
    <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Url</th>
           <th>Image</th>
            <th>Action</th>
</thead>
<tbody>

@foreach($partner as $partner)

    <td data-label="{{ __('#' )}}">{{ $partner->id }}</td>
    <td data-label="{{ __('Title' )}}">{{ $partner->title }}</td>
    <td data-label="{{ __('Url' )}}">{{ $partner->url }}</td>
    <td data-label="{{ __('Image' )}}">
        @php
        if(!empty($partner->image)){
            $image_url      = getProfileImageURL($partner->image, '100x100');
        }
    @endphp
        <img src="{{ asset($image_url) }}" style="width:70px; height:70px;" alt="Slider" >
    </td>
    <td>
        <a href="{{ url('admin/partner/'.$partner->id.'/edit') }}" class="btn btn-success" >Edit</a>

    </td>

@endforeach

</tbody>
</table>
    </div>
</div>
</div>
</div>
</div>
@endsection
