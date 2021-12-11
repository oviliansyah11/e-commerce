@extends('layouts.admin')

@section('title', 'Brand')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Brand</h1>
    </div>


    <form action="{{url('brand/'. $brand->id)}}" method="post" class="row">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Brand Name</label>
            <input type="text" class="form-control" name="brand_name" value="{{$brand->name}}">
            @foreach ($errors->get('brand_name') as $msg)
            <p class="text-danger">{{$msg}}</p>
            @endforeach
        </div>
        <div class="col-md-4">
            <label class="form-label">Category</label>
            <select class="form-select" name="category" required>
                <option selected value="">Select Category</option>
                @foreach ($category as $item)
                <option value="{{$item->id}}" @if ($item->id === $brand->category_id)
                    selected = "selected"
                    @endif>{{$item->name}}</option>
                @endforeach
            </select>
            @foreach ($errors->get('category') as $msg)
            <p class="text-danger">{{$msg}}</p>
            @endforeach
        </div>
        <div class="col-md-4">
            <label>Photo</label>
            <input type="file" class="form-control" name="photo">
            @if (strlen($brand->photo) > 0)
            <img src="{{asset('brands/'.$brand->photo)}}">
            @endif
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit" class="btn btn-success">Update Brand</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
</div>


@endsection