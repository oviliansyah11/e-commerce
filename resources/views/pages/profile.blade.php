@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
<!-- Begin Page Content -->
<div class="container d-flex align-items-center justify-content-center" style="height: 70vh">
    <div class="row">
        <div class="col-6 border-right">
            <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">{{$user->name}}</span><span
                    class="text-black-50">{{$user->email}}</span><span>
                </span>
                <div class="col-md-6 mt-2">
                    <input type="file" class="form-control" name="photo">
                </div>
            </div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-2"><label class="labels">Name</label>
                        <input type="text" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="col-md-12 mb-2"><label class="labels">Email</label>
                        <input type="text" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control" name="description" rows="3">{{$user->address}}</textarea>
                    </div>
                </div>
                <div class="mt-2 text-center">
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
</div>
@endsection