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
    <meta charset="UTF-8">
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU Peliculas</title>
    <!-- Pico css  --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head> 

<main>
    <section>
        <img 
            src="<?= $data["poster_url"]; ?>" width="200" alt="poster de" <?= $data["title"] ?> 
            stlye="border-radius: 16px"/>
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias </h3>
        <p>Fecha de estreno: <?= $data["release_data"]; ?> </p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?> </p>
    </hgroup>
</main>


<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
</style>