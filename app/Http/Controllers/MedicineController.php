<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicineStock;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function medicine_add(){
        return view('admin.medicines.medicine_add');
    }

    public function medicine_list(){
        $medicines = Medicine::all();
        return view('admin.medicines.medicine_list',[
            'medicines'=>$medicines,
        ]);
    }
    public function medicine_store(Request $request){
        $request->validate([
            'medicine_name'=>'required',
            'packing'=>'required',
            'generic_name'=>'required',
            'supplier_name'=>'required',
        ]);
        Medicine::insert([
            'medicine_name'=>$request->medicine_name,
            'packing'=>$request->packing,
            'generic_name'=>$request->generic_name,
            'supplier_name'=>$request->supplier_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Medicine Added Successfully');
    }
    public function medicine_edit(Request $request,$id){
        $medicines = Medicine::find($id);
        return view('admin.medicines.medicine_edit',[
            'medicines'=>$medicines,
        ]);
    }
    public function medicine_update(Request $request,$id){
        Medicine::find($request->id)->update([
            'medicine_name'=>$request->medicine_name,
            'packing'=>$request->packing,
            'generic_name'=>$request->generic_name,
            'supplier_name'=>$request->supplier_name,
            'updated_at'=>Carbon::now(),
        ]);
        return back()->with('success','Medicine Updated Successfully');
    }
    public function medicine_delete($id){
        Medicine::find($id)->delete();

        return back()->with('delete','Medicine Delete Successfully');
    }
    public function medicine_stock_add(){
        $medicines = Medicine::all();
        return view('admin.medicineStock.medicineStockAdd',[
            'medicines'=>$medicines,
        ]);
    }
    public function medicine_stock_list(){
        return view('admin.medicineStock.medicineStockList');
    }
    public function medicine_stock_store(Request $request){
        // print_r($request->all());
        $request->validate([
            'medicines_id'=>'required',
            'batch_id'=>'required',
            'expiry_date'=>'required',
            'quantity'=>'required',
            'mrp'=>'required',
            'rate'=>'required',
        ]);
        MedicineStock::insert([
            'medicines_id'=>$request->medicines_id,
            'batch_id'=>$request->batch_id,
            'expiry_date'=>$request->expiry_date,
            'quantity'=>$request->quantity,
            'mrp'=>$request->mrp,
            'rate'=>$request->rate,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Medicine Store in Added');
    }
}
