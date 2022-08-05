<?php
include ("conexion.php");
$pais = $_GET['pais'];
$eliminar = "DELETE FROM casos_paises WHERE pais = '$pais'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
	header("Location: eliminarpais.php");
}else{
	echo"<script>alert('No se ha podido eliminar :('); window.history.go(-1);</script>";
}

?>