<?php

	if(!empty($_POST)){
		
		$num_control = $_POST['pais'];
		$nombre_completo = $_POST['bandera'];
		$carrera = $_POST['casos_confirmados'];
		$fecha_ingreso = $_POST['muertes'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6LeBtuMZAAAAANcW605fi6wZd3KpaT-NyN2vPKCi';
		
		if(!$captcha){
 
			echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<script>alert("Captcha correcto :)")</script>';
				} else {
				echo '<script>alert("Captcha incorrecto :(")</script>';
			}
		}
	}
	if (isset($_POST["registrar"])) {
	if(empty($_POST["pais"]))
		echo "favor de llenar todo:)";
	}else{
	$pais = filter_var(strtolower($_POST["pais"]));
	$bandera = filter_var(strtolower($_POST["bandera"]));
	$casos_confirmados = filter_var(strtolower($_POST["casos_confirmados"]));
	$muertes = filter_var(strtolower($_POST["muertes"]));


	try{
		$conexion = new PDO('mysql:host=localhost;dbname=prueba_tecnica','root', '');
		$insercion = $conexion -> prepare('INSERT INTO casos_paises (pais, bandera, casos_confirmados, muertes) VALUES(:pais, :bandera, :casos_confirmados, :muertes)');
		$insercion ->execute(array(':pais' => $pais, ':bandera' => $bandera, ':casos_confirmados' => $casos_confirmados, ':muertes' => $muertes));
		echo '<script>alert("Se ha registrado de manera correcta")</script>';
		
	}catch (exception $e){
		echo "error".$e->getmessage();
	}
	
	//echo'<a href="registro_alumno.html">Volver al portal</a>';
}
//header("Location: registro_alumno.html");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseño.css">
	<meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript"src="js.js"></script>
	

	<title>Registro Pais</title>
</head>
<body>
	<div class="topnav" id="myTopnav">
  		<a href="indexadmin.html" class="active"><i class="fa fa-fw fa-home"></i>Home Admin</a>
  		<a href="agregar_pais.html"><i class="fa fa-globe" aria-hidden="true"></i>Agregar Pais</a>
  		<a href="veradmin.php"><i class="fa fa-flag" aria-hidden="true"></i>Ver paises</a>
  		<a href="editar_pais.php"><i class="fa fa-fw fa-edit"></i> Editar pais</a>
  		<a href="eliminarpais.php"><i class="fa fa-fw fa-trash"></i> Eliminar pais</a>
  		<a href="login.html"><i class="fa fa-fw fa-user"></i>Logout</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    	<i class="fa fa-bars"></i>
  		</a>
	</div>
	<meta http-equiv="refresh" content="2;url=http://localhost/Prueba_Tecnica/agregar_pais.html">
	
	
	<footer>
		<div class="footer">
			<div class="social">
				<a href="https://www.facebook.com/ITESGUANAJUATO/" target="_blank"><i class="fa fa-fw fa-facebook-square"></i></a>
				<a href="https://twitter.com/itesg_oficial?s=21" target="_blank"><i class="fa fa-fw fa-twitter-square"></i></a>
				<a href="https://www.itesg.edu.mx" target="_blank"><i class="fa fa-fw fa-google"></i></a>
				<a href="https://www.youtube.com/channel/UCJ2Oylxn_HLNMRmNF4XQrZw" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
			</div>
  			<p><i class="fa fa-fw fa-graduation-cap"></i>Alumno Luis Morales Vázquez</p>
		</div>
	</footer>
</body>
</html>