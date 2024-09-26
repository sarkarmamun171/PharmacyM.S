@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Customer List</h4>

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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Minhaz</td>
                                        <td>0155815</td>
                                        <td>Tangail</td>
                                        <td>samfjbe</td>
                                        <td>fgrth</td>
                                        <td>
                                            delte
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
