<?php

namespace App\Http\Controllers\Staff\AgencyManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgencyManagerController extends Controller
{
    public function showDashboard()
    {
        return view('Staff.AgencyManager.dashboard');
    }
}
