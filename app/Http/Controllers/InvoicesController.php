<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Medicine;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function invoice_list(){
        return view('admin.invoices.invoice_list');
    }
    public function invoice_add(){
        $customers = Customer::all();
        $medicines = Medicine::all();
        return view('admin.invoices.invoice_add',[
            'customers'=>$customers,
            'medicines'=>$medicines,
        ]);
    }
}
