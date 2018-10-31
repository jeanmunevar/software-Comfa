<?php
$nombre_fichero = ".\REPORTE CONTACTO.txt";
$gestor = fopen($nombre_fichero, "r");
$contenido = fread($gestor, filesize($nombre_fichero));
$array =explode("\n", $contenido , filesize($nombre_fichero));
$datosEnArray2 = array();
foreach($array as $primerArray){
    //echo $primerArray. "\n";
    $datosEnArray = explode('|', $primerArray);
    array_push($datosEnArray2, $datosEnArray);
}

echo json_encode([
    'data' => $datosEnArray2,
], JSON_UNESCAPED_UNICODE);    


/*foreach ($datosEnArray2 as $matriz1 => $valor1) {
    # code...
    //print_r($matriz1) ;
    //echo('\t');
    //print_r($valor1);
    //echo ('\n');
    foreach ($valor1 as $key => $value) {
        # code...
        //print_r($value);
        foreach ($valor1 as $key2 => $value2) {
            # code...
            $arrayFinal = [$key2 => $value2];
            //print_r($arrayFinal);
            
            $nombres = array_column($arrayFinal, [0]);
            print_r($nombres);
        }
    }
    

}*/






fclose($gestor);
