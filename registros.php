<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM formularios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" href="images/leer.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style> 

</head>
<body onload="zoom()">
    
<div class="container">

<header>

    <div class="heading">
        <svg width="159.375" height="53.851" viewBox="0 0 159.375 53.851" xmlns="http://www.w3.org/2000/svg">
            <g id="svgGroup" stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#000" stroke-width="0.25mm" fill="none" style="stroke:#000;stroke-width:0.25mm;fill:none">
                <path d="M 18.944 52.99 A 30.387 30.387 0 0 0 26.325 53.851 A 32.31 32.31 0 0 0 30.826 53.547 A 25.006 25.006 0 0 0 40.088 50.401 Q 45.975 46.951 49.237 40.838 A 27.794 27.794 0 0 0 51.526 35.06 A 33.17 33.17 0 0 0 52.65 26.926 A 35.906 35.906 0 0 0 52.377 23.102 A 28.955 28.955 0 0 0 49.237 13.013 Q 45.975 6.901 40.087 3.451 A 24.212 24.212 0 0 0 33.595 0.836 A 30.34 30.34 0 0 0 26.325 0.001 A 32.465 32.465 0 0 0 21.935 0.289 A 25.289 25.289 0 0 0 12.525 3.451 Q 6.6 6.901 3.375 12.976 A 27.681 27.681 0 0 0 1.013 19.121 A 34.038 34.038 0 0 0 0 26.926 A 36.337 36.337 0 0 0 0.36 31.443 A 28.729 28.729 0 0 0 3.375 40.876 Q 6.6 46.951 12.525 50.401 A 24.462 24.462 0 0 0 18.944 52.99 Z M 26.325 47.476 A 22.524 22.524 0 0 0 31.604 46.882 A 17.804 17.804 0 0 0 36.75 44.776 Q 41.175 42.076 43.5 37.426 A 22.095 22.095 0 0 0 45.677 29.797 A 27.338 27.338 0 0 0 45.825 26.926 A 25.249 25.249 0 0 0 45.094 20.744 A 21.192 21.192 0 0 0 43.5 16.426 Q 41.175 11.776 36.75 9.076 A 18.276 18.276 0 0 0 29.921 6.639 A 23.734 23.734 0 0 0 26.325 6.376 A 22.941 22.941 0 0 0 21.166 6.93 A 17.564 17.564 0 0 0 15.862 9.076 Q 11.475 11.776 9.15 16.426 A 22.095 22.095 0 0 0 6.973 24.054 A 27.338 27.338 0 0 0 6.825 26.926 A 25.249 25.249 0 0 0 7.556 33.107 A 21.192 21.192 0 0 0 9.15 37.426 Q 11.475 42.076 15.862 44.776 Q 20.25 47.476 26.325 47.476 Z" id="0" vector-effect="non-scaling-stroke"/>
                <path d="M 59.775 48.601 L 78.9 3.451 A 5.886 5.886 0 0 1 80.072 1.702 A 5.544 5.544 0 0 1 80.587 1.238 Q 81.675 0.376 83.25 0.376 L 84 0.376 A 4.769 4.769 0 0 1 85.327 0.553 A 3.841 3.841 0 0 1 86.662 1.238 A 5.707 5.707 0 0 1 88.273 3.284 A 6.679 6.679 0 0 1 88.35 3.451 L 107.475 48.601 A 6.691 6.691 0 0 1 107.673 49.134 Q 107.85 49.688 107.85 50.101 Q 107.85 51.526 106.912 52.501 Q 105.975 53.476 104.475 53.476 Q 103.425 53.476 102.562 52.913 Q 101.7 52.351 101.25 51.376 L 96.375 39.676 L 70.875 39.676 L 66 51.376 Q 65.55 52.351 64.687 52.913 Q 63.825 53.476 62.775 53.476 Q 61.275 53.476 60.337 52.501 A 3.322 3.322 0 0 1 59.4 50.145 A 4.302 4.302 0 0 1 59.4 50.101 A 2.495 2.495 0 0 1 59.444 49.653 Q 59.526 49.206 59.76 48.637 A 8.133 8.133 0 0 1 59.775 48.601 Z M 83.625 9.076 L 73.5 33.451 L 93.75 33.451 L 83.625 9.076 Z" id="1" vector-effect="non-scaling-stroke"/>
                <path d="M 118.875 50.101 L 118.875 4.201 Q 118.875 2.776 119.85 1.763 A 3.191 3.191 0 0 1 122.161 0.752 A 3.953 3.953 0 0 1 122.25 0.751 L 139.35 0.751 Q 144.759 0.751 148.655 2.134 A 17.025 17.025 0 0 1 150.975 3.151 Q 155.475 5.551 157.425 9.301 Q 159.375 13.051 159.375 17.401 Q 159.375 21.751 157.425 25.501 A 13.347 13.347 0 0 1 153.908 29.729 A 18.466 18.466 0 0 1 150.975 31.651 Q 147.345 33.587 142.007 33.961 A 38.008 38.008 0 0 1 139.35 34.051 L 125.7 34.051 L 125.7 50.101 A 3.292 3.292 0 0 1 125.371 51.58 A 3.317 3.317 0 0 1 124.687 52.501 Q 123.675 53.476 122.25 53.476 A 3.429 3.429 0 0 1 120.864 53.201 A 3.288 3.288 0 0 1 119.85 52.501 A 3.255 3.255 0 0 1 118.875 50.145 A 4.135 4.135 0 0 1 118.875 50.101 Z M 125.7 27.601 L 138.675 27.601 A 31.863 31.863 0 0 0 142.216 27.418 Q 146.119 26.98 148.393 25.493 A 7.562 7.562 0 0 0 149.437 24.676 A 9.536 9.536 0 0 0 152.545 17.738 A 11.931 11.931 0 0 0 152.55 17.401 A 9.973 9.973 0 0 0 151.672 13.181 A 9.809 9.809 0 0 0 149.438 10.126 Q 146.614 7.472 140.057 7.226 A 36.813 36.813 0 0 0 138.675 7.201 L 125.7 7.201 L 125.7 27.601 Z" id="2" vector-effect="non-scaling-stroke"/>
            </g>
        </svg>
    </div>

</header>

<h1 class="heading"> Registros </h1>
    <h3 class="text-center"><a href="logout.php">Logout</h3></a>
    <h3 class="text-center">Se muestras todos los registros disponibles</h3>
    
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="contactos" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Asunto</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['ID']?></td>
                        <td><?php echo $usuario['Nombre']?></td>
                        <td><?php echo $usuario['Asunto']?></td>
                        <td><?php echo $usuario['Email']?></td>
                        
                        <td><a href="https://wa.me/521<?php echo $usuario['Telefono']?>">
                        <?php echo $usuario['Telefono']?></a></td>

                        <td><?php echo $usuario['Fecha']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#contactos').DataTable(); 
      });
    </script>
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "100%" 
        }
    </script>

<script src="js/script.js"></script>
<script src="js/text-animation.js"></script>

</body>
</html>