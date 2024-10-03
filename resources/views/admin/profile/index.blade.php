@extends('layouts.app')
@section('content')
    <div class="pageTitle" style="align:left">
        <h5>Profile Information</h5>
    </div>
    @if (session('success'))
        <div class="alert alert-info">{{ session('success') }}</div>
    @endif
    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Information</h5>
                        <form action="{{ route('dashboard.profile.update', $users->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $users->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Email </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" value="{{ $users->email }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control"
                                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    {{-- <div class="my-2">
                                    <img src="{{ asset('uploads/user') }}/{{ $brands->brand_logo }}" alt="" srcset="" id="blah" width="70">
                                </div> --}}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control"
                                        value="{{ $users->password }}">
                                </div>
                            </div>
                            <div class="col-lg-4 m-auto">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
