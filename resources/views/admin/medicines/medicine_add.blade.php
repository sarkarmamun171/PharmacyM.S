@extends('layouts.app')
@section('content')
   <div class="pageTitle">
    <h5 class="card-title">Medicine Added</h5>
    <a href="{{ route('medicine.list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Medicine List</a>
   </div>
   @if (session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
   @endif
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('medicine.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Medicine Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="medicine_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Packing<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="packing" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Generic Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="generic_name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Supplier Name<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="supplier_name" class="form-control" required>
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
