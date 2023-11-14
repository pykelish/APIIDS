<?php

namespace App\Http\Controllers;
use App\Models\Carrun;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function getCarros()
    {
        $carruns = Carrun::all();
        return response()->json($carruns);
    }
}
