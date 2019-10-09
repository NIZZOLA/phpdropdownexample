<?php

$estado = @$_GET['estado'];

include "class.Cidades.php";
$cCity = new Cidades();

$cCity->comboestadual( $estado, "", "");

?>