@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Medicine Stock List</h4>
        @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('medicine.stock.add')}}" class="btn btn-primary">Add New Medicine</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Batch Id</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">MRP</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicineStocks as $sl=>$medicineStock)
                                    <tr>
                                        <th scope="row">{{ $sl+1 }}</th>
                                        <td>{{ $medicineStock->rel_to_medicine->medicine_name }}</td>
                                        <td>{{ $medicineStock->batch_id }}</td>
                                        <td>{{ $medicineStock->expiry_date }}</td>
                                        <td>{{ $medicineStock->quantity }}</td>
                                        <td>{{ $medicineStock->mrp }}</td>
                                        <td>{{ $medicineStock->rate }}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a  href="{{ route('medicine.stock.edit',$medicineStock->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa fa-pencil"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="{{ route('medicine.stock.delete',$medicineStock->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn" onclick=" return confirm('Are you sure want to Delete?')"><i class="fa fa-trash"></i></a>
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


