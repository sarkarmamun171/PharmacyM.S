@extends('layouts.app')
@section('content')
   <div class="pageTitle" style="align:left">
    <a href="{{ route('customer.list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Customer List</a>
   </div>
   @if (session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
   @endif
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer Added</h5>

                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Contact Number <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="contact_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Addrsss</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Doctor Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="doctor_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Doctor Address</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="doctor_address" class="form-control"></textarea>
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
