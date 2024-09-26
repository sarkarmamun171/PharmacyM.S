@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Customer List</h4>
        @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('customer.add') }}" class="btn btn-primary">Add New Customer</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Doctor Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $sl=>$customer)
                                    <tr>
                                        <th scope="row">{{ $sl+1 }}</th>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->contact_number }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->doctor_name }}</td>
                                        <td>{{ $customer->doctor_address }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a  href="{{ route('customer.edit',$customer->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa fa-pencil"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="{{ route('customer.delete',$customer->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn"><i class="fa fa-trash"></i></a>
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
