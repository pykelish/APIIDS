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

    public function getId_Carros($id)
    {
        $carruns_id = Carrun::find($id);
        if (!$carruns_id) {
            return response()->json(['message' => 'No ta el carrito'], 404);
        }
        return response()->json($carruns_id);
    }
}
