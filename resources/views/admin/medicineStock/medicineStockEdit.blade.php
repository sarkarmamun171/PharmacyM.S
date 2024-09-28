@extends('layouts.app')
@section('content')
   <div class="pageTitle">
    <h5 class="card-title">Medicine Stock Edit</h5>
    {{-- <a href="{{ route('medicine.stock.list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Medicine Stock List</a> --}}
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
                            <label for="" class="col-sm-2 col-form-label">Medicine Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="medicines_id" id="" required>
                                    <option value="">Select Medicine Name</option>
                                    @foreach ($medis as $medi)
                                        {{-- <option value="{{ $medi->id }}">{{ $medi->medicine_name }}</option> --}}
                                        <option value="{{ $medi->id }}" @if($medi->id == $medicines->medicines_id) selected @endif>
                                            {{ $medi->medicine_name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Batch ID<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="batch_id" class="form-control" required value="{{ $medicines->batch_id }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Expiry Date <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="date" name="expiry_date" class="form-control" value="{{ $medicines->expiry_date }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Quantity<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" class="form-control" value="{{ $medicines->quantity }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">M.R.P<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="mrp" class="form-control" value="{{ $medicines->mrp }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Rate<span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="rate" class="form-control" value="{{ $medicines->rate }}">
                            </div>
                        </div>
                        <div class="col-lg-4 m-auto">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection

