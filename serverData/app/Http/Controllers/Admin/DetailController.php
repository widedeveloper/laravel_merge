<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Driver;
use App\Customer;
use App\User;
use App\Detail;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $login_user_id = Auth::user()->id;

        $details = DB::table('details');
        $details=$details->join('drivers', 'details.driver_id', '=', 'drivers.id');
        $details=$details->select('details.*', 'drivers.user_id');
        if (Auth::user()->role == 3) {
            $details=$details->where('drivers.employee_id', $login_user_id);
        }
        
        $details=$details->orderBy("details.id")->paginate(15);

        return view('admin.details.index', compact('details'));
    }

   
    public function create()
    {
        $drivers = Driver::join('users', 'users.id', '=', 'drivers.user_id')
                            ->join('customers', 'customers.id', '=', 'drivers.company_id')
                            ->select('drivers.id', 'drivers.company_id', 'users.firstname', 'users.lastname', 'customers.company');
        $drivers = $drivers->where('drivers.employee_id', Auth::user()->id)->get();
      
        return view('admin.details.detailAdd', compact('drivers'));
    }

    public function store(Request $request)
    {
        $detail = new Detail();
        $detail->driver_id= $request['driver_id'];
        $detail->company= $request['company'];
        $detail->contact= $request['contact'];
        $detail->po= $request['po'];
        $detail->put_date= $request['put_date'];
        $detail->del_date= $request['del_date'];
        $detail->origin= $request['origin'];
        $detail->destination= $request['destination'];
        $detail->weight= $request['weight'];
        $detail->revenue= $request['revenue'];
        $detail->mile= $request['mile'];
        $detail->dho= $request['dho'];
        $detail->rpm= $request['rpm'];
        $detail->dh_rpm= $request['dh_rpm'];
        $detail->save();
        return redirect('admin/details');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $drivers = Driver::join('users', 'users.id', '=', 'drivers.user_id')
        ->join('customers', 'customers.id', '=', 'drivers.company_id')
        ->select('drivers.id', 'drivers.company_id', 'users.firstname', 'users.lastname', 'customers.company');
        $drivers = $drivers->where('drivers.employee_id', Auth::user()->id)->get();

        $detail = Detail::findOrFail($id);

        return view('admin.details.detailEdit', compact('drivers','detail'));
    }

    public function update(Request $request, $id)
    {
        $detail = Detail::findOrFail($id);
        $detail->driver_id= $request['driver_id'];
        $detail->company= $request['company'];
        $detail->contact= $request['contact'];
        $detail->po= $request['po'];
        $detail->put_date= $request['put_date'];
        $detail->del_date= $request['del_date'];
        $detail->origin= $request['origin'];
        $detail->destination= $request['destination'];
        $detail->weight= $request['weight'];
        $detail->revenue= $request['revenue'];
        $detail->mile= $request['mile'];
        $detail->dho= $request['dho'];
        $detail->rpm= $request['rpm'];
        $detail->dh_rpm= $request['dh_rpm'];
        $detail->save();
        return redirect('admin/details');
    }

    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect('admin/details');
    }
}
