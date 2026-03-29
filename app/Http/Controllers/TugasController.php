<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Tugas',
            'menuAdminTugas' => 'active'
        );
        return view('admin/tugas/index', $data);
    }
}
