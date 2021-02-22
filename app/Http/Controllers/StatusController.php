<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    // Státusz
    public function index()
    {
    	//$statuses = DB::select('select * from statuses');
        //return $statuses;
        return "welcome my friend";
    }
}
