@extends('layouts.app')
@section('content')
<div class="pageTitle">
    <h4>Customer Edit</h4>
</div>
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="section">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customer.update',$customers->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Name <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{ $customers->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Contact Number <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="number" name="contact_number" class="form-control" value="{{ $customers->contact_number }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Addrsss</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="address" class="form-control" value="{{ $customers->address }}"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Doctor Name <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="doctor_name" class="form-control" value="{{ $customers->doctor_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Doctor Address</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="doctor_address" class="form-control" value="{{ $customers->doctor_address }}" }}" ></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 m-auto">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
