@extends('layouts.admin')

@section('title', 'Category')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{url('/category')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="category_name">
                        @foreach ($errors->get('category_name') as $msg)
                        <p class="text-danger">{{$msg}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>


@endsection