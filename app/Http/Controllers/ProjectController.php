<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Projekt lista
    public function index()
    {
    	$projects = DB::select('select * from projects');
        return $projects;

    }

    // Projekt űrlap
    public function show($id)
    {
        return "kapott id: $id";
    }

    // Projekt létrehozása
    public function create(Request $request)
    {
    	$name = $request->input('projectName');
        return $name;
    }

    // Projekt módosítása
    public function edit($id)
    {
    	return "módosítva: $id";
    }

    // Projekt törlése
    public function delete($id)
    {
    	return "törölve: $id";
    }

}
