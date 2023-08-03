<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOnzeController extends Controller
{
    public function operacao(Request $request){
        $numero=$request->numero_a_ser_calculado;

        $numero_da_operacao=$request->numero_operacao;
        
        $M=$numero* $numero_da_operacao;
        $D=$numero/ $numero_da_operacao;
        $S=$numero- $numero_da_operacao;
        $A=$numero+ $numero_da_operacao;

        
        return json_encode([
           $M . " MULTIPLICAÇÃO", $D . " DIVISAO ", $S . " SUBTRAÇÃO", $A . " ADÇÃO "
        ]);


         }

         
}
