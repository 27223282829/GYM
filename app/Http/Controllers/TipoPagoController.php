<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    public function index()
    {
        // Logic to display a listing of payment types
        return view('tipopago.index');
    }
}
