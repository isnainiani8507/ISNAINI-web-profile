<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function index()
    {
        $skills = DB::table('skills')->get();
        return view('skills', ['skills' => $skills]);
    }
}
