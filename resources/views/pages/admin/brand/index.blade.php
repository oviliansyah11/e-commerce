@extends('layouts.admin')

@section('title', 'Brand')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Brand</h1>
    </div>

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mb-2">
        <a href="{{url('brand/create')}}" class="btn btn-success"><strong>Add Brand</strong></a>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Category</th>
                <th colspan="2" width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brand as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>
                    <a href="{{url('brand/'.$item->id . '/edit')}}" class="btn-info btn"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{url('brand/' . $item->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn-danger btn"><i class="fas fa-trash-alt"></i></button>
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