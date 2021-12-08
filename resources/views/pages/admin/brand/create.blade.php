@extends('layouts.admin')

@section('title', 'Brand')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Brand</h1>
    </div>


    <form action="{{url('/brand')}}" method="post" class="row">
        @csrf
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Brand Name</label>
            <input type="text" class="form-control" name="brand_name">
        </div>
        <div class="col-md-6">
            <label class="form-label">Category</label>
            <select class="form-select" name="category">
                <option selected>Select Category</option>
                @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit" class="btn btn-success">Add Brand</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
</div>


@endsection