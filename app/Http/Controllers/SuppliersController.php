<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SuppliersController extends Controller
{
    public function supplier_add(){
        return view('admin.suppliers.supplier_add');
    }
    public function suppiler_list(){
        $suppliers = Supplier::all();
        return view('admin.suppliers.suppliser_list',[
            'suppliers'=>$suppliers,
        ]);
    }

    public function supplier_store(Request $request){
        // print_r($request->all());
        $request->validate([
            'suppliers_name'=>'required',
            'suppliers_email'=>'required',
            'suppliers_number'=>'required',
            'address'=>'required',
        ]);
        Supplier::insert([
            'suppliers_name'=>$request->suppliers_name,
            'suppliers_email'=>$request->suppliers_email,
            'suppliers_number'=>$request->suppliers_number,
            'address'=>$request->address,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Suppliers Added Successfully');
    }
    public function supplier_edit($id){
        $suppliers = Supplier::find($id);
        return view('admin.suppliers.supplier_edit',[
            'suppliers'=>$suppliers,
        ]);
    }
    public function supplier_delete(Request $request,$id){
        Supplier::find($id)->delete();
        return back()->with('delete','Suppliers Deleted Successfully');
    }
    public function supplier_update(Request $request,$id){
        Supplier::find($id)->update([
            'suppliers_name'=>$request->suppliers_name,
            'suppliers_email'=>$request->suppliers_email,
            'suppliers_number'=>$request->suppliers_number,
            'address'=>$request->address,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect()->route('supplier.list')->with('success','Suppiler Upadated Succssfully');
    }
}
