@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Invoice List</h4>
        {{-- @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif --}}
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('invoice.add') }}" class="btn btn-primary">Add New Invoice</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Invoice Date</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $sl=>$invoice)
                                    <tr>
                                        <th scope="row">{{ $sl+1 }}</th>
                                        <td>{{ $invoice->rel_to_customer->name }}</td>
                                        <td>{{ $invoice->rel_to_medicine->medicine_name }}</td>
                                        <td>{{ $invoice->price }}</td>
                                        <td>{{ $invoice->discount }}</td>
                                        <td>{{ $invoice->invoices_date }}</td>
                                        <td>{{ $invoice->total_amount }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a  href="#" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa fa-pencil"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp del_btn" onclick=" return confirm('Are you sure want to Delete?')"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

