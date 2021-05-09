<?php

/*
Creo un array con datos para validar luego el login ingresado*/

$bbdd = [
  "username"=>"franco",
  "password"=>"12345"
];

/*guardo los datos del array en una varialble para poder validar,
en este caso sin llamar a la base de datos */

$userLogin = $_POST["username"];
$passLogin = $_POST["password"];

/*Valido el login ingresado a traves del operador AND por lo que
ambos datos ingresados deben ser correctos, si es asi a traves del header
me redirige a profile.php*/

if ($userLogin==$bbdd["username"] && $passLogin==$bbdd["password"]) {
  header("Location:profile.php");
} else {
  echo "Datos ingresados incorrectamente";
}

 ?>
