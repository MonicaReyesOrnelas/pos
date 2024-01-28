<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/materiales.controlador.php";
require_once "controladores/empleados.controlador.php";
require_once "controladores/materiales-usados.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/materiales.modelo.php";
require_once "modelos/empleados.modelo.php";
require_once "modelos/materiales-usados.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();