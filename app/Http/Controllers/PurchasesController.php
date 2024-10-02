<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function purchases_add(){
        $suppliers = Supplier::all();
        $invoices = Invoice::all();
        return view('admin.purchases.purchases_add',[
            'suppliers'=>$suppliers,
            'invoices'=>$invoices,
        ]);
    }
    public function purchases_store(Request $request){
        $request->validate([
            'suppliers_id'=>'required',
            'invoices_id'=>'required',
            'voucher_number'=>'required',
            'purchases_date'=>'required',
            'total_amount'=>'required',
            'payment_status'=>'required',
        ]);
        Purchase::insert([
            'suppliers_id'=>$request->suppliers_id,
            'invoices_id'=>$request->invoices_id,
            'voucher_number'=>$request->voucher_number,
            'purchases_date'=>$request->purchases_date,
            'total_amount'=>$request->total_amount,
            'payment_status'=>$request->payment_status,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Purchases Added successfully');
    }
    public function purchases_list(){
        $purchases = Purchase::all();
        return view('admin.purchases.purchases_list',[
            'purchases'=>$purchases,
        ]);
    }
    public function purchases_edit($id){
        $suppliers = Supplier::all();
        $invoices = Invoice::all();
        $purchases = Purchase::find($id);
        return view('admin.purchases.purchases_edit',[
            'suppliers'=>$suppliers,
            'invoices'=>$invoices,
            'purchases'=>$purchases,
        ]);
        return back()->with('success','Edit Added Successfully');
    }
    public function purchases_delete(Request $request,$id){
        Purchase::find($id)->delete();
        return back()->with('delete','Purchaes Deleted Successfully');
    }
}
