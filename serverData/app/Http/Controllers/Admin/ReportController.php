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

class ReportController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $drivers = Driver::join('users', 'users.id', '=', 'drivers.user_id')
        ->join('customers', 'customers.id', '=', 'drivers.company_id')
        ->select('drivers.id', 'drivers.company_id', 'users.firstname', 'users.lastname', 'customers.company');
        if(Auth::user()->role==3){
            $drivers = $drivers->where('drivers.employee_id', Auth::user()->id);
        }
        $drivers = $drivers->get();

        return view('admin.reports.index',compact('drivers'));
    }

    public function search_report(Request $request)
    {
    }
}
