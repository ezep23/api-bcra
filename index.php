<!-- Etiequetas php --> 
<?php

echo "hola mundo";

?> <!-- Es opcional --> 

<!-- Se puede combinar html con php -->

<h1>
    <?php echo "Primer contacto con php" ?>
</h1>

<!-- Una forma más corta es la siguiente: -->

<h1>
    <?= "Mi primer contacto" ?>
</h1>

<!-- Primeras variables -->

<?php 
# No pueden comenzar con un número y tampoco con un simbolo. utilizan snake_case
$año = 2024;
# Enteros, booleanos, strings.
# PHP -> lenguaje de tipado, debil y gradual.
# tipado por que en una variable se puede poner cualquiercosa, debil por que hay coerción de tipos de datos.

# El operador (+) solo sirve para sumar numeros
# para concatenar strings se usa: (.)

$concatenacion = "boca" . "juniors";

# php es gradual ya que se pueden indicar el tipo de datos a las variables en clases o funciones.

var_dump($concatenacion);
# var_dump muestra info sobre la variable
# configurar php para que no muestre los errores en producción

#para saber el tipo de dato de una variable se usa
echo gettype($año);

# se pueden forzar datos con (tipo de dato)
$edad = (int) 33;

#interpolación de cadenas (only "x")
$output = "Hola tengo $edad";

?>

<h1>
    <?= $output; ?>    
<h1>

<?php 
#Constantes en php
#BUENA PRACTICA -> DEFINIR EN UN ARCHIVO APARTE y no en medio del codigo

# las anteriores serias globales,
# locales: 

const NOMBRE = "MIGUEEEL";

#OPERADORES
#Logicos y Aritmeticos 

#SENTENCIAS DE CONTROL
if ($edad > 60){
    echo "Eres viejo";
} else if ($edad > 50){
    echo "Sos viejo pero estas";
} else {
    echo "Estás bien";
} 

#PLANTILLAS EN PHP - sintaxis alternativa
# PARSE ERROR -> ES EL HORROR MÁS HORRIBLE
#¿Que es ajax?
