<?php 
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];

	if(!empty($nombre) && !empty($correo)){
		echo '<h1>Informacion correcta</h1>
			  <p>'.$nombre.'</p>
			  <p>'.$correo.'</p>
			  <p>Los datos enviados por AJAX</p>';
	}else{
		echo "<h1>Error al enviar datos</h1>";
	}
 ?>