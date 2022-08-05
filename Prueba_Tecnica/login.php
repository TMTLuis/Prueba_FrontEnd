<?php
if(!empty($_POST)){
		
		$nombre = $_POST['nombre'];
		$password = $_POST['password'];
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
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_tecnica','root', '');
	$consulta = "SELECT nombre, password FROM usuario WHERE nombre =?";
	$mensaje = $conexion -> prepare($consulta);
	$nombre = 0;
	$password = 0;
	$nombre = ($_POST["nombre"]);
	$password = ($_POST["password"]);


	try{
	$mensaje->execute(array($nombre));
	$mensaje->setFetchMode(PDO::FETCH_ASSOC);
	foreach ($mensaje as $key) {
			$nombre = $key["nombre"];
			$password = $key["password"];
		}	
		if($nombre == $nombre && $password == $password){
			echo "<br>";
			
			header("Location: indexadmin.html");
		}else {
			echo '<script>alert("Ingresa correctamente los datos :)")</script>';
		}
	}catch (exception $e){
		echo "error".$e->getmessage();
	}

?>