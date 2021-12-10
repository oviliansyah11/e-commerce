@extends('layouts.admin')

@section('title', 'Category')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mb-2">
        <a href="{{url('category/create')}}" class="btn btn-success"><strong>Add Category</strong></a>
    </div>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Category Name</th>
                <th colspan="2" width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
            <tr class="text-center">
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{url('category/'.$item->id . '/edit')}}" class="btn-info btn"><i
                            class="far fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{url('category/' . $item->id)}}" method="post">
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