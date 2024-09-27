@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Medicine List</h4>
        @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('medicine.add')}}" class="btn btn-primary">Add New Medicine</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Packing</th>
                                        <th scope="col">Generic Name</th>
                                        <th scope="col">Supplier Name</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicines as $sl=>$medicine)
                                    <tr>
                                        <th scope="row">{{ $sl+1 }}</th>
                                        <td>{{ $medicine->medicine_name }}</td>
                                        <td>{{ $medicine->packing }}</td>
                                        <td>{{ $medicine->generic_name }}</td>
                                        <td>{{ $medicine->supplier_name }}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a  href="{{ route('medicine.edit',$medicine->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa fa-pencil"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="{{ route('medicine.delete',$medicine->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn"><i class="fa fa-trash"></i></a>
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

