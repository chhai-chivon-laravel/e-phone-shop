<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return  view("dashboard.index");
    }

    public function product(){
        return  view("dashboard.product");
    }

    public function category(){
        return  view("dashboard.category");
    }

    public function report(){
        return  view("dashboard.report");
    }
}
