<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_add(){
        return view('admin.customer.customer_add');
    }
    public function customer_list(){
        return view('admin.customer.customer_list');
    }
}
