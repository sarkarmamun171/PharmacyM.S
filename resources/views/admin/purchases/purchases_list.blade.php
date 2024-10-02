@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Purchases List</h4>
        @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('purchases.add') }}" class="btn btn-primary">Add New Purchases</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Invoice Id</th>
                                        <th scope="col">Voucher Number</th>
                                        <th scope="col">Purchases Date</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $sl => $purchase)
                                        <tr>
                                            <th scope="row">{{ $sl + 1 }}</th>
                                            <td>{{ $purchase->rel_to_supplier->suppliers_name }}</td>
                                            <td>{{ $purchase->rel_to_invoice->id }}</td>
                                            <td>{{ $purchase->voucher_number }}</td>
                                            <td>{{ $purchase->purchases_date }}</td>
                                            <td>{{ $purchase->total_amount }}</td>
                                            <td>
                                                @if ($purchase->payment_status == 1)
                                                    <span>Pending</span>
                                                @elseif ($purchase->payment_status == 2)
                                                    <span>Accept</span>
                                                @elseif ($purchase->payment_status == 3)
                                                    <span>Cancel</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('purchases.edit',$purchase->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i
                                                            class="fa fa-pencil"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a href="{{ route('purchases.delete',$purchase->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn"
                                                        onclick=" return confirm('Are you sure want to Delete?')"><i
                                                            class="fa fa-trash"></i></a>
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
