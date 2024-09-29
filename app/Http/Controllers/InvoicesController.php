<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function invoice_list(){
        return view('admin.invoices.invoice_list');
    }
}
