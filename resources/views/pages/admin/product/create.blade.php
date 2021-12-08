@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>

    <div class="row">
        <div class="col">
            <form class="row g-3" method="POST" action="{{url('product/create')}}">
                <div class="col-md-4">
                    <label for="inputEmail4">Product Name</label>
                    <input type="email" class="form-control" name="product_name">
                </div>
                <div class="col-md-4">
                    <label for="inputState">Category</label>
                    <select id="category" class="form-select">
                        <option selected>Select Category</option>
                        @foreach ($model as $item)
                        <option value="{{$item->category->id}}">{{$item->category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState">Brand</label>
                    <select name="brand" class="form-select">
                        <option selected>Select Brand</option>
                        @foreach ($brand as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4">Price</label>
                    <input type="email" class="form-control" name="price">
                </div>
                <div class="col-md-4">
                    <label for="inputEmail4">Stock</label>
                    <input type="email" class="form-control" name="stock">
                </div>
                <div class="col-md-4">
                    <label for="inputZip">Photo</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
</div>


@endsection