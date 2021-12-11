@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Product</h1>
    </div>
    <div>
        <a class="btn btn-success text-white" href="{{url('/product')}}" role="button"><i class="fas fa-arrow-left"
                style="color: white"> Back to my product</i>
        </a>
        <a href="#" class="btn-primary btn text-white"><i class="far fa-edit" title="Edit" style="color: white">
                Edit</i></a>
        <a href="#" class="btn-danger btn text-white"><i class="far fa-trash-alt" title="Edit" style="color: white">
                Delete</i></a>
    </div>
    <div class="row mt-5">
        <div class="col-2" style="max-height: 350px; overflow: hidden;">
            <img src="{{asset('products/'.$product->photo)}}" alt="Product" height="300px">
        </div>
        <div class="col">
            <h3>{{$product->name}}</h3>
            <p><strong>Category</strong> : {{$product->category->name}}</p>
            <p><strong>Brand</strong> : {{$product->brand->name}}</p>
            <p><strong>Description :</strong></p>
            <p>{{$product->description}}</p>
            <p><strong>Price</strong> : {{$product->price}}</p>
            <p><strong>Stock</strong> : {{$product->stock}}</p>
        </div>
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