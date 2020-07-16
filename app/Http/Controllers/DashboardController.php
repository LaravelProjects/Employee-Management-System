<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Department;
use App\Employee;
use App\State;
use App\Division;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = [
            'employee' => Employee::count(),
            'department' => Department::count(),
            'division' => Division::count(),
            'country' => Country::count(),
            'state' => State::count(),
            'city' => City::count(),
        ];

        return view('dashboard', $stats);
    }
}
