<?php
/* print"Hola mundo";
echo "Hola mundo","Hola mundo 2";
$nombre = "Hola mundo";
$_nombre;
$edad = 10;
$promedio = 9.5;
$esAlumno = false;
$Nombre = "Marines";

const escuela = "Niños Heroes";
define("direccion","avenida alegria");
echo $nombre," ",escuela
*/
/*
$nombre = "Hola Mundo";
echo gettype($nombre);
$nombre = 9.5;
echo gettype($nombre);
*/
/*
$numero = 20.5;
$numero2 = 10;
$suma = $numero + $numero2;
echo intval($suma);
*/
/*
$palabra = "Codigo";
$palabra2 = "Facilito";
echo "Hola ". $palabra. $palabra2;
echo "Hola {$palabra} Facilito"
*/
/*
$saludo = "Hola";
echo "$saludo Marines Bienvenida"
*/
//echo "\"Eres una mala persona\"dije yo"
//echo '"Eres una buena persona"'
/*
echo <<<Frase
"No cuentes los días, haz que los días cuenten"
Frase;
*/
/*
$apellido = substr("Maria Soledad",6,-1);
echo $apellido;
*/
/*
$bienvenida = "Bienvenido al mundo de la programación";
$palabra = "programación";
$buscar = strpos($bienvenida, $palabra);
$extración = substr($bienvenida, $buscar);
echo $extración;
*/
/*
$RFC = "91 75 1A EC C7";
$buscar = " ";
$remplazar = ":";
$resultado = str_replace($buscar,$remplazar,$RFC);
echo $resultado;
*/
/*
$anio = "1989";
$mes = "05";
$dia = "01";
$formato = "%s/%s/%s";
echo sprintf($formato,$dia,$mes,$anio);
*/

//Operadores de comparación
//Operador igual ==
/*
$raza = "Husky";
var_dump($raza == "Husky");
*/
//operador identico ===
/*
$edad = 18;
var_dump($edad === 18);
*/
//operador diferente != <>
/*
$edad = 20;
var_dump($edad != 18);
*/
//operador no identico !==
/*
$edad = "20";
var_dump($edad !== 18);
*/
//operador mayor que >
/*
$edad = 15;
var_dump($edad > 18);
*/
//operador mayor igual >=
/*
$edad = 15;
var_dump($edad >= 18);
*/
//operador menor que <
/*
$edad = 15;
var_dump($edad < 18);
*/
//operador menor igual <=
/*
$edad = 15;
var_dump($edad <= 18);
*/
// operador de nave espacial
//0 ambos valores son iguales
//-1 el valor es menor
//1 el valor es mayor
/*
$edad = 7;
var_dump($edad <=> 6);
*/

//operadores de asignación

//operador de asignación =
//operador  de asignación por referencia =&
/*
$a = 10;
$b =& $a;
$a = 20;
$a = 60;
echo $b;
*/
// operador de asignación para concatenar .=
/*
$saludo = "Hola";
$saludo .= "Maria";
$saludo .= "Bienvenida";
echo $saludo;
*/

//operadores aritmeticos

//operador identidad +
//operador de negación -
//operador de adición +
//operador de sustracción -
//operador de multiplicación *
//operador de división /
//operador de módulo %
//operador exponencial **

//operadores lógicos

//operador and o && (es verdadero si los dos son verdaderos)
/*
$edad = 18;
$esMayor =$edad >=18;

$regalo = "Si";
$traeRegalo = $regalo == "Si";

var_dump($esMayor and $traeRegalo);
*/
//operador or o || (es falso si los dos son falsos)
/*
$edad = 15;
$esMayor = $edad >=18;

$regalo = "No";
$traeRegalo = $regalo == "Si";

var_dump($esMayor or $traeRegalo);
*/

//operador xor
/*
$edad = 18;
$esMayor = $edad >=18;

$regalo = "No";
$traeRegalo = $regalo == "Si";

var_dump($esMayor xor $traeRegalo);
*/

//operador not !
/*
$edad = 15;
$esMayor = $edad >=18;

$regalo = "No";
$traeRegalo = $regalo == "Si";

var_dump(!$esMayor);
*/

//operadores incremento y decremento

//operador pre-incremento
/*
$numero = 10;
echo ++$numero;
*/
//operador post-incremento
/*
$numero = 10;
$numero++;
echo $numero;
*/
//operador pre-decremento
/*
$numero = 10;
echo --$numero;
*/
//operador post-decremento
/*
$numero = 10;
$numero--;
echo $numero;
*/

//operadores Ternario, Elvis y fusion null

//operador ternario (operando)?operando:operando
/*
$promedio = 9;
$aprobo = ($promedio>=7)?"Aprobaste":"Reprobaste";
echo $aprobo;
*/
//operador elvis ?:
/*
$promedio = null;
$aprobo = ($promedio)?:5;
echo $aprobo;
*/
//operador fusion null ??
/*
$promedio = null;
$aprobo = ($promedio)??5;
echo $aprobo;
*/

//Estructuras de Control

//If else
/*
$promedio = 8;
$tieneFaltas = "No";
//if actua como operador ternario
if($promedio >= 7 && $tieneFaltas == "No"){
    echo "Aprobaste la materia";
}else{
    echo "Reprobaste la materia";
}
*/
//Switch
/*
$camisa = "Verde";
switch($camisa){
    case "Gris":
        echo "Encontre Camisa Gris";
    break;
    case "Amarillo":
        echo "Encontre Camisa Amarilla";
    break;
    case "Rojo":
        echo "Encontre Camisa Roja";
    break;
    case "Verde":
        echo "Encontre Camisa Verde";
    break;
}
*/
//Match regresa solo valores y no se puede con bloques de codigo
/*
$camisa = "Verde";
echo match($camisa){
    "Gris" => "Encontre Camisa Gris",
    "Amarillo" => "Encontre Camisa Amarilla",
    "Rojo" => "Encontre Camisa Roja",
    "Verde" => "Encontre Camisa Verde"
};
*/
//While repite varias veces un bloque de codigo
/*
$zapato = 0;
while($zapato<=100){
    echo "Zapato numero: ", $zapato;
    ++$zapato;
}
*/
//Do while ejecuta almenos una vez el codigo
/*
$zapato = 0;
do{
    echo "Zapato numero: ", $zapato;
    ++$zapato;
}while($zapato <= 100);
*/
//For es mas organizado del while, es lo mismo que el while pero solo maneja numeros
/*
for($i = 0; $i <= 10; $i++){
    echo "Valor de la variable: ",$i;
}
*/
//For Each forma sensilla de iterar arreglos
/*
$array = ["Maria", "Jose", "Sofia"];
$nombre = "Maria";

foreach($array as $nombre){
    echo "Mi nombre es: ",$nombre;
}
*/

//Arreglos
/*
$array = ["Maria", "Jose", "Sofia"];

echo $array[2];
echo $array[1];
*/

//Areglos asociativos usamos foreach para recorrer el arreglo
/*
$datos = [
    "nombre"=>"Maria",
    "apellido"=>"Monsanto",
    "edad"=>"34"
];

foreach($datos as $key=>$valor){
    echo "$key: $valor";
}
*/
//Agregar, eliminar y modificar datos en un array
/*
$alumnos = ["Maria", "Jose", "Sofia"];
$datos = [
    "nombre"=>"Maria",
    "apellido"=>"Monsanto",
    "edad"=>"34"
];
//insertar
array_push($alumnos,"Luis");
$datos["Colonia"] = "Alegria";
//eliminar
unset($alumnos[1]);
unset($datos["Apellido"]);
// Modificar
$alumnos[0] = "Marines";
$datos["Apellido"] = "Mendez";
*/

//Funciones en arreglos
/*
$alumnos = ["Maria", "Jose", "Sofia","Luis"];
$datos = [
    "nombre"=>"Maria",
    "apellido"=>"Monsanto",
    "edad"=>"34"
];
count($alumnos); //contar
count($datos);

asort($alumnos);//ordenar alfabeticamente
asort($datos);

arsort($alumnos);//ordenar al reves alfabeticamente
arsort($datos);

array_search("Sofia",$alumnos);//busqueda en el array
array_search("29",$datos);

array_replace($alumnos,[
    0=>"Laura",
    1=>"Jorge"
]);//reemplaza en el array
array_replace($datos,[
    "Apellido"=>"Mendez"
]);
*/

//Arreglos multidimensionales
/*
$animales = [
   ["Puma","Jaguar","Lince"],
   ["Paloma","Pato","Tucan"],
   ["Serpiente","Cocodrilo","Tortuga"]
];

echo $animales[2][1];

$animales = [  //areglo asociativo
    "Felinos"=>   ["Puma","Jaguar","Lince"],
    "Aves"=>      ["Paloma","Pato","Tucan"],
    "Reptiles"=>  ["Serpiente","Cocodrilo","Tortuga"]
   ];

   echo $animales["Reptiles"][1];
*/

//recorrer un arreglo multidimensional
/*
$animales = [  //areglo asociativo
    "Felinos"=>   ["Puma","Jaguar","Lince"],
    "Aves"=>      ["Paloma","Pato","Tucan"],
    "Reptiles"=>  ["Serpiente","Cocodrilo","Tortuga"]
];

foreach($animales as $clasificación){
    foreach($clasificación as $animal){
        echo "Animal: $animal";
    }
}

foreach($animales as $key=>$clasificación){
    foreach($clasificación as $animal){
        echo "$key: $animal";
    }
}
*/

//Funciones
/*
function obtenerEdad(){
    $edad= 2023-1989;
    echo"Mi edad es: $edad";
}

obtenerEdad();
*/

//Parametros y argumentos
/*
function obtenerEdad($anio){//parametro
    $edad= 2023-$anio;
    echo"Mi edad es: $edad";
}
obtenerEdad(1989);//argumento
*/
/*
function obtenerEdad($anio,$anioActual=2023){//parametros predeterminados
    $edad= $anioActual-$anio;
    echo"Mi edad es: $edad";
}
obtenerEdad(2000,2010);//argumento
*/

//return
/*
function obtenerEdad($anio,$anioActual=2023){
    $edad= $anioActual-$anio;
    return $edad;
}
$edad = obtenerEdad(2000,2010);
echo"Mi edad es: $edad";
*/

//Declaraciones de tipo escalar
/*
declare(strict_types=1);
function obtenerEdad(int $anio,int $anioActual=2023){
    $edad= $anioActual-$anio;
    return $edad;
}
$edad = obtenerEdad(2000,2010);
echo"Mi edad es: $edad";
*/

//Funciones anonimas
/*
$suma = function(){
    return 20+10;
};
echo "La suma es ",$suma();
*/
/*
$mensaje = "La suma es: ";
$suma = function($numero1,$numero2) use ($mensaje){
    $resultado = $numero1+$numero2;
    return "$mensaje $resultado";
};
echo "La suma es ",$suma(100,400);
*/

//Paradigma de Programación
/*
require_once("autoload.php");
(new AutoCarga())->cargarRutas();
*/
//crear una clase
/*
La definición básica de una clase comienza con la palabra reservada class,
seguida de un nombre de clase, y continuando con un par de llaves que encierran las
definiciones de las propiedades y métodos pertenecientes a dicha clase.
El nombre de clase puede ser cualquier etiqueta válida, siempre que no sea una palabra
reservada de PHP.
*/
/*
Para crear una instancia de una clase, se debe emplear la palabra reservada new.
*/
/*
$jose ->nombre = "Jose";
$jose ->apellido = "Lopez";
$jose ->hablar("K-pop");
echo $jose->apellido;

$sofia = new Persona();
$sofia ->nombre = "Sofia";
$sofia ->apellido = "Arevalo";
$sofia ->hablar("Politica");
echo $sofia->nombre;
*/
//Variables de Instancia y de Clase
/*
$jose = new Persona();      //variable de instancia
Persona::$idioma="Español"; //variable de clase
echo Persona::$idioma;
*/

// $This hace referencia a una instancia actual

//Get y set
/*
$jose ->setTelefono("1234567890");
echo $jose->getTelefono();
*/
/*
$jose->__set("telefono","1234567890");
echo $jose->__get("telefono");
*/

/*
$cliente = new Cliente();
$cliente->nombre="Jose";
echo $cliente->nombre;
*/
/*
$empleado= new Empleado();
$proveedor= new Proveedor();
$empleado->nombre="Luis";
$cliente->saludar($empleado);
*/
// clases anonimas
/*
$claseAnonima = new class{
    public $nombre;
    function suma(){
        echo 10+20;
    }
};
$claseAnonima->suma();
*/

//CRUD las principales funciones que se implementan en una base de datos
//CRUD(Create,Read,Update,Delete)








?>