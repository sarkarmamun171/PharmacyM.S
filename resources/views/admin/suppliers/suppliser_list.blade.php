@extends('layouts.app')
@section('content')
    <div class="pageTitle">
        <h4>Supplier List</h4>
        @if (session('delete'))
            <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-info">{{ session('success') }}</div>
        @endif
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('supplier.add')}}" class="btn btn-primary">Add New Supplier</a>
                            </h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Supplier Name</th>
                                        <th scope="col">Supplier Email</th>
                                        <th scope="col">Supplier Number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $sl=>$supplier)
                                    <tr>
                                        <th scope="row">{{ $sl+1 }}</th>
                                        <td>{{ $supplier->suppliers_name }}</td>
                                        <td>{{ $supplier->suppliers_email }}</td>
                                        <td>{{ $supplier->suppliers_number }}</td>
                                        <td>{{ $supplier->address }}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a  href="{{ route('supplier.edit',$supplier->id) }}" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa fa-pencil"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="{{ route('supplier.delete',$supplier->id) }}" class="btn btn-danger shadow btn-xs sharp del_btn" onclick=" return confirm('Are you sure want to Delete?')"><i class="fa fa-trash"></i></a>
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
@section('footer_script')
{{-- <script>
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
  });
  swalWithBootstrapButtons.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel!",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
      });
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire({
        title: "Cancelled",
        text: "Your imaginary file is safe :)",
        icon: "error"
      });
    }
  });
</script> --}}
@endsection
