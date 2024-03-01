<?php //indica que el código PHP comienza en este punto.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacionController extends Controller {
    
    public function create(){
        return view('formulario');
    
    }

    public function store(Request $request){ //Request acceder a datos y hacer calculos
        
        $dato          = $request->numero;
        $resultado     = $this->NPrimo($dato); //resultado primos
        
        $dato1         = $request->numero1;
        $dato2         = $request->numero2;
        $resultadoA    = $this->Amigos($dato1,$dato2); //resultado amigos

        $x             = $request->x;
        $y             = $request->y;
        $z             = $request->z;
        $resultadoB    = $this->resolverEcuacionCuadratica($x,$y,$z);

        return nl2br("$resultado.\n$resultadoA.\n$resultadoB.\n");

    }
    public function NPrimo($num){
        $cont = 0;
        for($i=1; $i<=$num; $i++){
            if($num%$i==0){
                $cont++;
            }
        }
        if($cont==2){
            return "$num es primo";
        }else{
            return "$num no es primo";
        }    
    }

    public function SumaDivisores($num){
        $sum = 0;
        for($i=1; $i<=$num/2; $i++){
            if($num % $i ==0){
                $sum+=$i;
            }
        } return $sum;
    }

/*     public function storeAmigo(Request $request){ //Request acceder a datos hacer calculos        
        $dato1       = $request->numero1;
        $dato2       = $request->numero2;
        $resultadoA   = $this->Amigos($dato1,$dato2);
        return $resultadoA;
    }   */  

    public function Amigos($numero1,$numero2){
        if($this-> SumaDivisores($numero1)==$numero2 && $this->SumaDivisores($numero2)==$numero1){
            return "$numero1 y $numero2 Son Amigos";
        }else{
            return "$numero1 y $numero2 No son amigos";
        }
    }

// E C   C U A D R A T I C A
    function resolverEcuacionCuadratica($a, $b, $c) {
        // Verificar si la ecuación es cuadrática
        if ($a == 0) {
            // Si $a es 0, la ecuación no es cuadrática
            if ($b == 0) {
                // Si $b también es 0, la ecuación es degenerada
                if ($c == 0) {
                    return "La ecuación es degenerada (0 = 0)";
                } else {
                    return "La ecuación no tiene solución real";
                }
            } else {
                // Si $b no es 0, la ecuación es lineal
                $x = -$c / $b;
                return "La ecuación es lineal. La solución es: x = $x";
            }
        } else {
            // Calcular el discriminante
            $discriminante = $b * $b - 4 * $a * $c;
            
            // Verificar el valor del discriminante
            if ($discriminante > 0) {
                // Dos soluciones reales distintas
                $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
                $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
                return "La ecuación tiene dos soluciones reales distintas: x1 = $x1, x2 = $x2";
            } elseif ($discriminante == 0) {
                // Una solución real doble
                $x = -$b / (2 * $a);
                return "La ecuación tiene una solución real doble: x = $x";
            } else {
                // No hay soluciones reales
                return "La ecuación no tiene soluciones reales";
            }
        }
    }



}
