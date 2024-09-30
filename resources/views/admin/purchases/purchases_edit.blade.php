@extends('layouts.app')
@section('content')
   <div class="pageTitle">
    <h5 class="card-title">Purchases Edit</h5>
   </div>
   @if (session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
   @endif
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Supplier Name</label>
                            <div class="col-sm-10">
                                <select name="suppliers_id" id="" class="form-control">
                                    <option value="">Select Supplier Name</option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->suppliers_name }}</option>
                                    @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Invoice ID</label>
                            <div class="col-sm-10">
                                <select name="invoices_id" id="" class="form-control">
                                    <option value="">Select Invoice</option>
                                    @foreach ($invoices as $invoice)
                                        <option value="{{ $invoice->id }}">{{ $invoice->id }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="invoices_id" class="form-control" required> --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Voucher Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="voucher_number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Purchases Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="purchases_date" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Total Amount</label>
                            <div class="col-sm-10">
                                <input type="number" name="total_amount" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Payment Status</label>
                            <div class="col-sm-10">
                                {{-- <input type="" name="payment_status" class="form-control" required> --}}
                                <select name="payment_status" id="" class="form-control">
                                    <option value="">Select Payment Status</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Accept</option>
                                    <option value="3">Cancel</option>
                                </select>
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
