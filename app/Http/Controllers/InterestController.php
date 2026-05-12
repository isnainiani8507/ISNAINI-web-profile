<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class InterestController extends Controller
{
    public function index()
    {
        $interests = DB::table('interests')->get();
        return view('interests', ['interests' => $interests]);
    }
}
