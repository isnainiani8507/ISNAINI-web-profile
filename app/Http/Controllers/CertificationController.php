<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CertificationController extends Controller
{
    public function index()
    {
        $certifications = DB::table('certifications')->get();
        return view('certifications', ['certifications' => $certifications]);
    }
}
