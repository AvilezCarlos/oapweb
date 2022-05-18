<?php 

include("con_db.php");

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
           <?php
	    }
    }   else {
	    	?> 
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
?>