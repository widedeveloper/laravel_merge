<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Driver;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    
    public function index()
    {
        $drivers = DB::table('drivers');
        $drivers=$drivers->join('users', 'drivers.user_id', '=', 'users.id');
        $drivers=$drivers->join('customers', 'drivers.company_id', '=', 'customers.id');
        $drivers=$drivers->select('drivers.*', 'users.firstname','users.lastname','customers.company',
                                    'users.email','users.phone','users.is_active','users.role');
        $drivers=$drivers->where('users.role','0');
        $drivers=$drivers->orderBy("drivers.id")->paginate(15);

        return view('admin.drivers.index',compact('drivers'));
    }
    
    public function create()
    {
        $customers = Customer::all();
        $employees = User::where('role','=',3)->get();
        return view('admin.drivers.driverAdd',compact('customers','employees'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->firstname= $request['firstname'];
        $user->lastname= $request['lastname'];
        $user->email= $request['email'];
        $user->phone= $request['phone'];
        $user->password= bcrypt("123456");
        $user->save();

        $user_id = $user->id;

        $driver= new Driver();
        $driver->user_id = $user_id;
        $driver->company_id= $request['customer'];
        $driver->mc_number= $request['mc_number'];
        $driver->equipment= $request['equipment'];
        $driver->max_weight= $request['max_weight'];
        $driver->starting_rpm= $request['starting_rpm'];
        $driver->region= $request['region'];
        $driver->employee_id= $request['employee'];
       
        $driver->save();
        return redirect('admin/drivers');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {       
        $driver =  Driver::join('users','drivers.user_id','=','users.id')
                        ->select('drivers.*','users.firstname','users.lastname',
                        'users.email','users.phone','users.is_active','users.role')
                        ->where('drivers.id','=',$id)->get();
                        
        $customers = Customer::all();
        $employees = User::where('role','=',3)->get();
        return view('admin.drivers.driverEdit',compact('driver','customers','employees'));
    }

    public function update(Request $request, $id)
    {

       


        $driver = Driver::findOrFail($id);
       
        $driver->company_id= $request['customer'];
        $driver->mc_number= $request['mc_number'];
        $driver->equipment= $request['equipment'];
        $driver->max_weight= $request['max_weight'];
        $driver->starting_rpm= $request['starting_rpm'];
        $driver->region= $request['region'];
        $driver->employee_id= $request['employee'];
       
        $driver->save();

        $user_id = $driver->user_id;
        $user = User::findOrFail($user_id);
        $user->firstname= $request['firstname'];
        $user->lastname= $request['lastname'];
        $user->email= $request['email'];
        $user->phone= $request['phone'];
        $user->save();
       
        return redirect('admin/drivers');
    }

    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect('admin/drivers');
    }

    public function setactive(Request $request){        
        $id = $request->id;

        $isActive = $request->isActive;

        $driver = Driver::findOrFail($id);
        $user = User::findOrFail($driver->user_id);
        $user->is_active = $isActive;
        
        if($user->save()) {
            die (json_encode("ok"));
        }else{
            die (json_encode("fail"));
        }
    }
}