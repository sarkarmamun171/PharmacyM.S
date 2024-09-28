@extends('layouts.app')
@section('content')
   <div class="pageTitle">
    <h5 class="card-title">Suppliers Edit</h5>

   </div>
   {{-- @if (session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
   @endif --}}
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('supplier.update',$suppliers->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Supplier Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="suppliers_name" class="form-control" value="{{ $suppliers->suppliers_name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Suppliers Email<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="email" name="suppliers_email" class="form-control" value="{{ $suppliers->suppliers_email }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Supplier Number <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="suppliers_number" class="form-control" value="{{ $suppliers->suppliers_number }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Address<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="address" class="form-control" value="{{ $suppliers->address }}">
                            </div>
                        </div>
                        <div class="col-lg-4 m-auto">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
