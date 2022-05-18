<?php 

include("con_db.php");

<<<<<<< HEAD
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
=======
if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['asunto']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $asunto = trim($_POST['asunto']);
		$correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO formularios(Nombre, Asunto, Email, Telefono, Fecha) VALUES ('$nombre', '$asunto', 
		'$correo', '$telefono', '$fechareg')";
	    $resultado = mysqli_query($conn,$consulta);
		if ($resultado) {
	    	?>
			<script>
				Swal.fire({
					position: 'center',
					icon: 'success',
					title: 'Gracias, pronto te contactaremos',
					showConfirmButton: false,
					timer: 1500
					})
			</script>
           <?php
	    } else {
	    	?> 
	    	<script>
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Ocurrió un error',
					showConfirmButton: false,
					timer: 1500
				})
			</script>
>>>>>>> bd9464615bb17117429880d2596ef04dbdd6f2e2
           <?php
	    }
    }   else {
	    	?> 
<<<<<<< HEAD
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

=======
	    	<script>
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Complete todos los campos',
					showConfirmButton: false,
					timer: 1500
				})
			</script>
           	<?php
    }
		
}
>>>>>>> bd9464615bb17117429880d2596ef04dbdd6f2e2
?>