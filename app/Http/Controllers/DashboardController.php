<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $servuces = Service::count();
        return view('dashboard.home',compact('servuces'));
    }
}
