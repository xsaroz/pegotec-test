<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * index
     * redirects to index page of dashboard
     */
    public function index()
    {
        return view('dashboard.index');
    }
}
