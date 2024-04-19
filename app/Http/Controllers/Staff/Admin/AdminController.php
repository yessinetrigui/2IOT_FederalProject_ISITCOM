<?php

namespace App\Http\Controllers\Staff\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('Staff.Admin.dashboard');
    }
}
