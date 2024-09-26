<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_add()
    {
        return view('admin.customer.customer_add');
    }
    public function customer_list()
    {
        $customers = Customer::all();
        return view('admin.customer.customer_list', [
            'customers' => $customers,
        ]);
    }
    public function customer_store(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required',
            'doctor_name' => 'required',
        ]);
        Customer::insert([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'doctor_name' => $request->doctor_name,
            'doctor_address' => $request->doctor_address,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success','Customer addeed Successfully');
    }
    public function customer_edit($id)
    {
        // print_r($id);
        $customers = Customer::find($id);
        return view('admin.customer.customer_edit', [
            'customers' => $customers,
        ]);
    }
    public function customer_update(Request $request,$d)
    {
        Customer::find($request->id)->update([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'doctor_name' => $request->doctor_name,
            'doctor_address' => $request->doctor_address,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('success','Customer Updated');
    }
    public function customer_delete($id){
        Customer::find($id)->delete();
        return back()->with('delete','Customer deleted Successfully!');
    }
}
