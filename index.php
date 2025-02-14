<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link href="https://fonts.cdnfonts.com/css/vazirmatn" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/noto-sans-devanagari" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/unbounded" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Angel eduardo vazquez lopez</title>
</head>
<body>
<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "basededatos";

$conexion = new mysqli ($username, $password, $servername, $database) ;
if ($conexion->connent_error){
    die "conexion Fallida: " . $conexion->connent_error ;
}
$sql = "SELECT * FROM tripulacion" ;
$resultado = $conexion->query($sql) ;
?>

    <div class="container">
        <h1>datos de la tabala</h1>

<?php  if($resultado->num_rows >0 ): ?>
    <table>
        <tr>
<th>id</th>
<th>nombre</th>
<th>edad</th>
<th>poder</th>
<th>rol</th>

        </tr>
   <?php while ($fila = $resultado->fecht_assoc()):   ?>
    <tr>
        <td><?php echo $fila['personajesid']; ?><td>
        <td><?php echo $fila['nombre']; ?><td>
        <td><?php echo $fila['edad']; ?><td>
        <td><?php echo $fila['poder']; ?><td>
        <td><?php echo $fila['rol']; ?><td>
   </tr>
   <?php endwhite; ?>
        
    </table>
<?php else: ?>
    <p> no se encontro</p>
    <?php endif; ?>
</div>

    <div class="Contenedor-del-contenedor" style="height: 95vh; width: 186vh;">

        <div class="contener" style="font-family: 'Unbounded', sans-serif; background-color: #f18f01;">
          <a class="navbar-brand" href="" style="color: #eef0f2; font-size: 21px;">Inicio</a>
          <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
        
          <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav" style="font-family: 'Vazirmatn', sans-serif; background-color: none; font-size: 18px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">Unidad 1</a>
                    <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="dropdown-item" href="/index.html">Practica 1</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 2</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 3</a><br>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 2
                    </a>
                    <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="dropdown-item" href="/index.html">Practica 4</a><br>
                        <a href="dropdown-item" href="/index1.html">Practica 5</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 6</a><br>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #eef0f2;">
                        Unidad 3
                    </a>
                    <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a href="dropdown-item" href="/index.html">Practica 7</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 8</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 9</a><br>
                        <a href="dropdown-item" href="/index.html">Practica 10</a><br>
                     </div>
                </li>
            </ul>
           </div>
        </div>
    
        
        <div class="jumbotron" style="text-align: center; background-color: #eef0f2;">
            <h1 class="display-4" style="color: #a99985; font-weight: 700; font-family: 'Noto Sans Devanagari', sans-serif;">Cuarto Semestre</h1>
        </div>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "Voleyball";

    $conexion = new mysqli($username, $password, $servername, $database);
    if($conecion->conect_error){
        die("Conecion Fallida" . $conexion->conect_error);
    }
    $sql = "SELECT * FROM nfleast";
    ?>
        
    
</body>
</html>