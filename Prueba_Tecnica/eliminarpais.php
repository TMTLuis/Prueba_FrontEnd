<?php
include("conexion.php");
$usuarios = "SELECT * FROM casos_paises order by pais asc"
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="diseño.css">
	<link rel="stylesheet" type="text/css" href="fonts.css"></link>
	<meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/476e9b5772/UntitledProject/style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript"src="js.js"></script>
	
	<title>COVID</title>

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
	<center>
	<span class="ir-arriba icon-arrow-up2"></span>

	<h2>Casos en los distintos paises</h2>
	
	<table>
		<thead>
  		<tr>
    		<th>Pais</th>
    		<th>Bandera</th>
    		<th>Casos confirmados</th>
    		<th>Muerte</th>
        <th>Eliminar</th>
    		
  		</tr>
  		</thead>
  		<?php $resultado = mysqli_query($conexion, $usuarios);

  		while($row = mysqli_fetch_assoc($resultado)) { ?>
  		<tr>
    		<td>
    			<?php
    			echo $row["pais"];
    			?>
    				
    		</td>
    		<td>
    			<?php
    			echo $row["bandera"];
    			?>
    		</td>
    		<td>
    			<?php
    			echo $row["casos_confirmados"];
    			?>
    		</td>
    		<td>
    			<?php
    			echo $row["muertes"];
    			?>
    		</td>
    		  
       <td><a href="procesar_eliminar.php?id=<?php echo $row["pais"]; ?>" class ="table__item__link" onclick="confirmacion()"><i class="fa fa-fw fa-trash"></i></a></td>

  		</tr>
      <?php } mysqli_free_result($resultado);?>

	</center>



<footer>
	<div class="footer">
			<div >
				<a href="https://www.facebook.com/ITESGUANAJUATO/" target="_blank"><i class="fa fa-fw fa-facebook-square"></i></a>
				<a href="https://twitter.com/itesg_oficial?s=21" target="_blank"><i class="fa fa-fw fa-twitter-square"></i></a>
				<a href="https://www.itesg.edu.mx" target="_blank"><i class="fa fa-fw fa-google"></i></a>
				<a href="https://www.youtube.com/channel/UCJ2Oylxn_HLNMRmNF4XQrZw" target="_blank"><i class="fa fa-fw fa-youtube"></i></a>
			</div>
  			
  			<p><i class="fa fa-fw fa-graduation-cap"></i>Luis Morales Vázquez</p>
  			
		</div>
</footer>
</body>
</html>