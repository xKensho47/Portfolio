<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'portfolio_db';

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos) or die('No se pudo conectar a la base de datos, por favor comuníquese con el administrador del sistema');

$conexion->set_charset("utf8");

/*
//Para el infinityfree
$host = 'sql103.infinityfree.com';
$usuario = 'if0_37435731';
$contraseña = 'LinkinPark4777';
$base_de_datos = 'if0_37435731_portfolio_db';

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos) or die('No se pudo conectar a la base de datos, por favor comuníquese con el administrador del sistema');

$conexion->set_charset("utf8");
*/