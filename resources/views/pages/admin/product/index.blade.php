@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product</h1>
    </div>

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mb-2">
        <a href="{{url('/handleSelect')}}" class="btn btn-success"><strong>Add Product</strong></a>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Images</th>
                <th>Product Name</th>
                <th>Category</th>
                <th colspan="3" width="5%" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    @if (strlen($item->photo) > 0)
                    <img src="{{asset('products/'.$item->photo)}}" height="70px">
                    @endif
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>
                    <a href="{{url('product/'.$item->id)}}" class="btn-info btn" title="Detail"><i class="fas fa-eye"
                            style="color: white"></i></a>
                </td>
                <td>
                    <a href="{{url('product/'.$item->id. '/edit')}}" class="btn-primary btn"><i class="far fa-edit"
                            title="Edit"></i></a>
                </td>
                <td>
                    <form action="{{url('product/'.$item->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn-danger btn" title="Delete"><i
                                class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->
</div>


@endsection