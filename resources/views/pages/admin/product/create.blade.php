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
        <form class="row g-3" method="POST" action="{{url('/product')}}">
            @csrf
            <div class="col-md-4">
                <label>Product Name</label>
                <input type="text" class="form-control" name="product_name">
            </div>

            <div class="col-md-4">
                <label for="inputState">Category</label>
                <select name="category" id="category" onchange="handleSelect()" class="form-select category">
                    <option selected>Select Category</option>
                    @foreach ($data as $category)
                    <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState">Brand</label>
                <select name="brand" id="brand" class="form-select" disabled>
                </select>
            </div>

            <div class="col-md-12 mt-2 mb-2">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="col-md-4">
                <label for="inputEmail4">Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4">Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <div class="col-md-4">
                <label for="inputZip">Photo</label>
                <input type="file" class="form-control" name="photo">
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Add Product</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
</div>

@section('js')
<script type="text/javascript">
    function handleSelect(){
        let category = $('#category').val()
        $("#brand").children().remove()
        $("#brand").append(`<option selected>Choose your brand</option>`);
        $("#brand").prop('disabled',true);
        if (category!= '' && category!= null) {
            $.ajax({
                url:"{{url('')}}/getSelected/"+category,
                success:function(res){
                    console.log(res);
                    $("#brand").prop('disabled',false)
                    $.each(res, function(index, data){
                        $("#brand").append(`<option value="${data.id}">${data.name}</option>`)
                    })
                }
            })
        }
    }
</script>
@stop

@endsection