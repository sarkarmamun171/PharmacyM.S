<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
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
        ]);
        return back()->with('success','Medicine Updated Successfully');
    }
    public function medicine_delete($id){
        Medicine::find($id)->delete();

        return back()->with('delete','Medicine Delete Successfully');
    }
}
