<?php
    include_once "algoritmos.php";
    switch ($_POST['opcion']) {
        case 1:
            $prueba = [];
            for ($i=0; $i < 50; $i++) { 
                array_push($prueba,rand(1, 1000));
            }
            $objeto = new Burbuja();
            $arreglo = $objeto->algoritmoBurbuja($prueba);

            echo json_encode($arreglo);
            break;
        case 2:
            $prueba = [];
            for ($i=0; $i < 50; $i++) { 
                array_push($prueba,rand(1, 1000));
            }
            $objeto = new Insertion();
            $arreglo = $objeto->algoritmoInsertion($prueba);
            echo json_encode($arreglo);
            break;
        case 3:
            $prueba = [];
            for ($i=0; $i < 50; $i++) { 
                array_push($prueba,rand(1, 1000));
            }
            $prueba2 = [];
            for ($i=0; $i < 50; $i++) { 
                array_push($prueba2,rand(1, 1000));
            }
            $objeto = new Merge();
            $arreglo = $objeto->algoritmoMerge($prueba,$prueba2);
            echo json_encode($arreglo);
            break;
        case 4:
            $prueba = [];
            for ($i=0; $i < 100; $i++) { 
                array_push($prueba,rand(1, 1000));
            }
            /* $objeto = new quicksort();
            $arreglo = $objeto->algoritmoQuicksort($prueba); */
            $arreglo2 = quickSort($prueba);
            
            
            echo json_encode($arreglo2);
        
        default:
            # code...
            break;
    }
    

    
?>