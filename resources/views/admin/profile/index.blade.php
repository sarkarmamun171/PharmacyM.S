@extends('layouts.app')
@section('content')
   <div class="pageTitle" style="align:left">
    <h5>Profile Information</h5>
   </div>

   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile Information</h5>
                    <form action="#" method="post" enctype="multipart/form-data">
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
                                <input type="email" name="email" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <textarea type="file" name="image" class="form-control"></textarea>
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
