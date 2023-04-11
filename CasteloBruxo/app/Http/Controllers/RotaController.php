<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagen;
use Illuminate\Support\Facades\DB;

class RotaController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
