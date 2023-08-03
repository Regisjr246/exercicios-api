<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioNoveController extends Controller
{
    public function divisivel(Request $request)
    {

        $numero = $request->numero_divisor;

        $numeros = [];

        for ($i = 1; $i <= 100; $i++) {
            $calculo = $numero / $i;
            $resultado = $numero . " ÷ " . $i . " = " . $calculo;
            array_push($numeros, $resultado);
        }

        return json_encode([
            "resultado" => $numeros
        ]);
    }
}
