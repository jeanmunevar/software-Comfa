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


$errores = [];
foreach ($datosEnArray2 as $index => $fila) {
    //Validar campo Codigo administradora
    if($fila[0] == NULL ){
        $msg = ["Error fila ".($index + 1)." columna 1. Campo vacio"];
        array_push($errores, $msg);
    }
    else{
        if($fila[0] != 'CCF69'){
            $msg = ["Error fila ".($index + 1)." columna 1. Codigo de caja errado, revise espacios en blanco o caracteres especiales"];
            array_push($errores, $msg);
        }
    }
    //Validar campo razón social del aportante
    if($fila[1]== ''| $fila[1] == NULL){
        $msg = ["Error fila ".($index + 1)." columna 2. Campo vacio"];
        array_push($errores, $msg);
    }
    else{
        if((trim($fila[1]) == TRUE)){
            $msg = ["Error fila ".($index + 1)." columna 2. Espacios en blanco al final o al inicio del campo"];
            array_push($errores, $msg); 
            echo $fila[1];
            
        }
        else
        {
             
        }
    }
    

    
    


}
echo json_encode([
    'data' => $errores,
], JSON_UNESCAPED_UNICODE);    
//var_dump($errores);




fclose($gestor);
