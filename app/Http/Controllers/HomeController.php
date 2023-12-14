<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $roleId = Auth::user()->role_id;
        switch ($roleId) {
            case 1:
                return redirect()->route('employee.home');
            case 2:
                return redirect()->route('supervisor.home');
            case 3:
                return redirect()->route('admin.home');
            case 4:
                return redirect()->route('super-admin.home');
        }
    }


    public function employeeHome()
    {
        return view('home.home_1');
    }

    public function supervisorHome()
    {
        return view('home.home_2');
    }
    public function adminHome()
    {
        return view('home.home_3');
    }
    public function aupeAdminHome()
    {
        return view('home.home_4');
    }
}
