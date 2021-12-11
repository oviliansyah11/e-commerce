@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
    <div class="row">
        <form class="row g-3" method="POST" action="{{url('product/'.$product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <label>Product Name</label>
                <input type="text" class="form-control" name="product_name" value="{{$product->name}}">
                @foreach ($errors->get('product_name') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>

            <div class="col-md-4">
                <label for="inputState">Category</label>
                <select name="category" id="category" onchange="handleSelect()" class="form-select category">
                    <option selected>Select Category</option>
                    @foreach ($category as $item)
                    <option value="{{$item->id}}" @if ($item->id === $product->category_id)
                        selected = "selected" @endif>{{$item->name}}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('category') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>
            <div class="col-md-4">
                <label for="inputState">Brand</label>
                <select name="brand" id="brand" class="form-select">
                    @foreach ($brand as $item)
                    <option value="{{$item->id}}" @if ($item->id === $product->category_id)
                        selected = "selected" @endif>{{$item->name}}</option>
                    @endforeach
                </select>

                @foreach ($errors->get('brand') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>

            <div class="col-md-12 mt-2 mb-2">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" rows="3">{{$product->description}}</textarea>
                @foreach ($errors->get('description') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>
            <div class="col-md-4">
                <label for="inputEmail4">Price</label>
                <input type="number" class="form-control" name="price" value="{{$product->price}}">
                @foreach ($errors->get('price') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>
            <div class="col-md-4">
                <label for="inputEmail4">Stock</label>
                <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
                @foreach ($errors->get('stock') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>
            <div class="col-md-4">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo">
                @if (strlen($product->photo) > 0)
                <img src="{{asset('products/'.$product->photo)}}" class="mt-2">
                @endif
                @foreach ($errors->get('photo') as $msg)
                <p class="text-danger">{{$msg}}</p>
                @endforeach
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">Edit Product</button>
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