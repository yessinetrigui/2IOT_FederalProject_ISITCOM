<?php

namespace App\Http\Controllers\Staff\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function showDashboard()
    {
        return view('Staff.Manager.dashboard');
    }
}
