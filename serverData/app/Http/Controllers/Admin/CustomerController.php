<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class customerController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $customers = Customer::paginate(10);
        return view('admin.customers.index',compact('customers'));
    }
    
    public function create()
    {
        return view('admin.customers.customerAdd');
    }

    public function store(Request $request)
    {
        $customer= new customer();
        $customer->company= $request['company'];
        $customer->description= $request['desc'];
        $customer->save();
        return redirect('admin/customers');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.customerEdit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->description   = Input::get('desc');
        $customer->company          = Input::get('company');
       
        $customer->save();
        return redirect('admin/customers');
    }

    public function destroy($id)
    {
        $user = Customer::find($id);
        $user->delete();
        return redirect('admin/customers');
    }
}