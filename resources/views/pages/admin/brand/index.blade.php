@extends('layouts.admin')

@section('title', 'Brand')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Brand</h1>
    </div>

    <div class="mb-2">
        <a href="{{url('brand/create')}}" class="btn btn-success"><strong>Add Brand</strong></a>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brand as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->
</div>


@endsection