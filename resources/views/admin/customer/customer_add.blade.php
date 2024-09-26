@extends('layouts.app')
@section('content')
   <div class="pageTitle">
        <h4>Add Customer</h4>
   </div>
   <div class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer</h5>

                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Contact Number <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Addrsss</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="contact_number" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Doctor Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label">Doctor Address <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <textarea type="text" name="contact_number" class="form-control" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
