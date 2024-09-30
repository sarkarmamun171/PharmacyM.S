<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Medicine;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function invoice_list(){
        $invoices = Invoice::all();
        return view('admin.invoices.invoice_list',[
            'invoices'=>$invoices,
        ]);
    }
    public function invoice_add(){
        $customers = Customer::all();
        $medicines = Medicine::all();
        return view('admin.invoices.invoice_add',[
            'customers'=>$customers,
            'medicines'=>$medicines,
        ]);
    }
    public function invoice_store(Request $request){
        $request->validate([
            'customers_id'=>'required',
            'medicines_id'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'invoices_date'=>'required',

        ]);
        Invoice::insert([
            'customers_id'=>$request->customers_id,
            'medicines_id'=>$request->medicines_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'invoices_date'=>$request->invoices_date,
            'total_amount'=>$request->price-($request->price*$request->discount/100),
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Invoice Added Successfully');
    }
    public function invoice_edit($id){
        $invoices = Invoice::find($id);
        $customers = Customer::all();
        $medicines = Medicine::all();
        return view('admin.invoices.invoices_edit',[
            'invoices'=>$invoices,
            'customers'=>$customers,
            'medicines'=>$medicines,
        ]);
    }
    public function invoice_update(Request $request,$id){
        Invoice::find($id)->update([
            'customers_id'=>$request->customers_id,
            'medicines_id'=>$request->medicines_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'invoices_date'=>$request->invoices_date,
            'total_amount'=>$request->price-($request->price*$request->discount/100),
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('invoice.list')->with('success','Invoice Updated Successfully');
    }
    public function invoice_delete($id){
        Invoice::find($id)->delete();
        return back()->with('delete','Invoice delete Successfully');
    }
}
