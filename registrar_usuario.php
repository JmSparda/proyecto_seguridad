<?php
require_once 'includes/DB/Conexion.php';

$con = new Conexion();

$db_table = "usuario";


$nombre = utf8_decode($_REQUEST['nombre']);
$apellido = utf8_decode($_REQUEST['apellido']);
$dni = utf8_decode($_REQUEST['dni']);
$telefono = utf8_decode($_REQUEST['telefono']);
$fecha = utf8_decode($_REQUEST['fecha']);
$email = utf8_decode($_REQUEST['email']);
$contra = utf8_decode($_REQUEST['contra']);

echo $nombre;?><br><?php
echo $apellido;?><br><?php
echo $dni;?><br><?php
echo $telefono;?><br><?php
echo $fecha;?><br><?php
echo $email;?><br><?php
echo $contra;?><br><?php


$insert = 'INSERT INTO `'.$db_table.'`(`nombre`,`apellidos`,`dni`,`telefono`,`f_nacimiento`,`email`,`contraseña`) VALUES ("'.$nombre.'","'.$apellido.'","'.$dni.'","'.$telefono.'","'.$fecha.'","'.$email.'","'.$contra.'")';

$query2 = $con->query($insert);
?>
