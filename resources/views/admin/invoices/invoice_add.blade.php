@extends('layouts.app')
@section('content')
   <div class="pageTitle">
    <h5 class="card-title">Medicine Added</h5>
    <a href="#" class="btn btn-primary"><i class="fa fa-list"></i> Invoice List</a>
   </div>
   {{-- @if (session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
   @endif --}}
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Customer Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="customers_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Medicine Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="medicines_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Price<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Discount</label>
                            <div class="col-sm-10">
                                <input type="number" name="discount" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Invoice Date<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="date" name="invoices_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Total Amount<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="total_amount" class="form-control" required>
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
