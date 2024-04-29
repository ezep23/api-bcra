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
$age = (int) 33;

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

#MATCH > SWITCH
#Compara la variable con los demás numeros para determinar la variable outputAge
$outputAge = match($age) {
 0, 1, 2 => "Eres un bebe, $name",
 3,4,5,6,7,8,9,10 => "Eres un niño, $name",
 11,12,13,14,15,16,17,18 => "Eres un adolescente, $name",
 19,20,21,22,23,24,25,26,27,28,29,30 => "Eres un adulto, $name",
 default => "Eres un viejo, $name", 
};

#En vez de hacer eso se pueden evaluar expresiones en vez de numeros.
# outputAge = match (true){
# $age < 2   => "Eres un niño"
# $age < 10  => "Eres un niño"
# $age < 18  => "Eres un adolescente
# $age == 18 => "Eres mayor" 
# $age > 18  => "Eres un adulto"
# }

#Arrays -> faciles;
$bestLanguages = ["PHP","Javascript","Java", 1, 2, 4,];
$bestLanguages[] = "Java";
# No es necesario poner limites y va al final 
$bestLanguages[2] = "C"

#Iterar arrays:
?>

<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<?php
#Hay varios linters para php -> herramientas que mejoran el codigo.
# Hay arrays que serìan similares a un diccionario -> arrays asociativos.

$person = [  
    "nombre" => "Miguel",
    "edad" => 75, 
    "isDev" => true, 
    "languages" => ["Php, java, python"],  
];

?>