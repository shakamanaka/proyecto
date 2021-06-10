<?php
    class Burbuja{	  
        public static function algoritmoBurbuja($vector) {
            $limite = 0;
            $indice = 0;
            $cantidad = count($vector);
            $vector2 = [];
            for ($limite=1; $limite < $cantidad; $limite++) { 
                for ($indice=0; $indice < $cantidad - $limite; $indice++) { 
                    if($vector[$indice] > $vector[$indice + 1]){
                        $tmp = $vector[$indice];
                        $vector[$indice] = $vector[$indice + 1];
                        $vector[$indice + 1] = $tmp;
                        
                    }
                    
                }
                array_push($vector2,$vector);
            } 
            return $vector2;
                
        }
    }
    class Insertion{	  
        public static function algoritmoInsertion($vector) {
            $indice = 0;
            $dato = 0;
            $cantidad = count($vector);
            $posEspacio = 0;
            $vector2 = [];
            for ($indice=1; $indice < $cantidad; $indice++) { 
                $dato = $vector[$indice];
                $posEspacio = $indice;
                while ($posEspacio > 0 && $vector[$posEspacio - 1] > $dato) {
                    $vector[$posEspacio] = $vector[$posEspacio - 1];
                    $posEspacio -= 1;
                   
                }
                $vector[$posEspacio] = $dato;
                array_push($vector2,$vector);
            }

            return $vector2;     
        }
    }
    class Merge{
        public static function algoritmoMerge($vector,$vector2){
            $objeto = new Merge();
            $vector = $objeto->ordenar($vector);
            $vector2 = $objeto->ordenar($vector2);
            $vectorDevuelto = [];
            for ($i = 0; $i < (count($vector)+count($vector2)); $i++)
            {
                array_push($vectorDevuelto, 0);
            }
            $indiceIzquierdo = 0;
            $indiceDerecho = 0;
            $cantidadIzquierda = count($vector);
            $cantidadDerecha = count($vector2);
            $contador = 0;
            $vectorDevuelto2 = [];
            while($indiceIzquierdo < $cantidadIzquierda && $indiceDerecho < $cantidadDerecha){
                if($vector[$indiceIzquierdo] <= $vector2[$indiceDerecho]){
                    $vectorDevuelto[$contador] = $vector[$indiceIzquierdo];
                    $indiceIzquierdo++;
                    $contador++;
                    array_push($vectorDevuelto2,$vectorDevuelto);
                }
                else{
                    $vectorDevuelto[$contador] = $vector2[$indiceDerecho];
                    $indiceDerecho++;
                    $contador++;
                    array_push($vectorDevuelto2,$vectorDevuelto);
                }
                 
            }
            while($indiceIzquierdo < $cantidadIzquierda){
                $vectorDevuelto[$contador] = $vector[$indiceIzquierdo];
                $indiceIzquierdo++;
                $contador++;
                array_push($vectorDevuelto2,$vectorDevuelto);
            }
            while($indiceDerecho < $cantidadDerecha){
                $vectorDevuelto[$contador] = $vector2[$indiceDerecho];
                $indiceDerecho++;
                $contador++;
                array_push($vectorDevuelto2,$vectorDevuelto);
    
            }
            return $vectorDevuelto2;
        }
        public static function ordenar($vector){
            $indice = 0;
            $dato = 0;
            $cantidad = count($vector);
            $posEspacio = 0;
            for ($indice=0; $indice < $cantidad; $indice++) { 
                $dato = $vector[$indice];

                $posEspacio = $indice;
                while ($posEspacio > 0 && $vector[$posEspacio - 1] > $dato) {
                    $vector[$posEspacio] = $vector[$posEspacio - 1];
                    $posEspacio -= 1;
                }
                $vector[$posEspacio] = $dato;
            }
            return $vector;
        }
    }
    
    class quicksort{
        
                function algoritmoQuicksort(array $arr) : array
        {
            $objeto = new quicksort();
            $low = 0;
            $high = count($arr) - 1;
            $objeto->partition($arr, $low, $high);
            return $arr;
        }
        function partition(&$arr, int $left, int $right) : void
        {
            $objeto = new quicksort();
            $pivotLocation = $objeto->arrange($arr, $left, $right);
            if ($left < $pivotLocation - 1) { // sort left half
                $objeto->partition($arr, $left, $pivotLocation-1);
                
            }
            if ($pivotLocation < $right) { // sort right half
                $objeto->partition($arr, $pivotLocation, $right);
               
            }
        }
        function arrange(&$arr, $left, $right) : int
        {
            $pivot = $arr[ ($left + $right) / 2 ];
            while ($left <= $right) {
                while($arr[$left] < $pivot) ++$left; // find element on left that should on right
                while($arr[$right] > $pivot) --$right; // find element on right that should be on left
                if ($left <= $right) {
                    $temp = $arr[$left];
                    $arr[$left] = $arr[$right];
                    $arr[$right] = $temp;
                    ++$left;
                    --$right;
                }
            }
            return $left;
        }
    }
    
    
    function quickSort(array $arr) : array
    {
        $low = 0;
        $high = count($arr) - 1;
        $prueba = [];
        partition($arr, $low, $high,$prueba);
        return $prueba;
    }
    function partition(&$arr, int $left, int $right,&$prueba) : void
    {
        $pivotLocation = arrange($arr, $left, $right);
        if ($left < $pivotLocation - 1) { // sort left half
            partition($arr, $left, $pivotLocation-1,$prueba);
             array_push($prueba,$arr);
            
        }
        if ($pivotLocation < $right) { // sort right half
            partition($arr, $pivotLocation, $right,$prueba);
             array_push($prueba,$arr);
            
        }
       

    }
    function arrange(&$arr, $left, $right) : int
    {
        $pivot = $arr[ ($left + $right) / 2 ];
        while ($left <= $right) {
            while($arr[$left] < $pivot) ++$left; // find element on left that should on right
            while($arr[$right] > $pivot) --$right; // find element on right that should be on left
            if ($left <= $right) {
                $temp = $arr[$left];
                $arr[$left] = $arr[$right];
                $arr[$right] = $temp;
                ++$left;
                --$right;
            }
        }
        return $left;
    }
    
    

   
    
?>