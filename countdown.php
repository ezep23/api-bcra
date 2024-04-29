<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
# Iniciando una nueva sesiòn de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticiòn y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticiòn 
   y guardamos el resultado
*/
$result = curl_exec($ch);

// alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); -> get de una api la opciòn mas facil

$data = json_decode($result, true);
// Cerramos 
curl_close($ch);

?>

<head>
    <t
</head> 