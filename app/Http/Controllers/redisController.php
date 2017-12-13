<?php

namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Tabla;

class redisController extends Controller
{
    
    public function index()
    {
        echo "metemos 10000 inserciones en redis...<br>";

        function microtime_float()
        {
            list($useg, $seg) = explode(" ", microtime());
            return ((float)$useg + (float)$seg);
        }

        $tiempo_inicio = microtime_float();


        for ($i=0; $i < 20000; $i++) 
        { 
            $pasos = rand ( 1 , 5 );
            for ($j=0; $j < $pasos ; $j++) { 
                Redis::lpush('nuevos'.$i,'Entrada'.$j);
            }
        }


        $tiempo_fin = microtime_float();
        $tiempo = $tiempo_fin - $tiempo_inicio;
        echo "Tiempo empleado: ".($tiempo_fin - $tiempo_inicio);

        echo "<hr>metemos 10000 inserciones en base de datos...<br>";

        $tiempo_inicio = microtime_float();

        for ($i=0; $i < 20000 ; $i++) { 
            $tabla = new Tabla;

            $tabla->nombre = "carlos".$i;

            $tabla->save();
        }

        $tiempo_fin = microtime_float();
        $tiempo = $tiempo_fin - $tiempo_inicio;
        echo "Tiempo empleado: ".($tiempo_fin - $tiempo_inicio);

    }
}