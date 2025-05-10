<?php
    include("conexion.php");
    $sql = "SELECT * FROM clientes";
    $consulta = mysqli_query($cnx, $sql);
    while ($fila = mysqli_fetch_assoc($consulta)) {
        $datos[] = $fila;
    }
    mysqli_close($cnx);
    unset($sql, $consulta);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tabla cliente</title>
    <meta name="author" content="Tienda">
    <meta name="Description" content="Ventas">
    <meta name="keywords" content="ropa,blusas,pantalones,chaquetas,vestidos">
    <meta charset="UTF-8">
    <link rel="icon" type="image-x/icon" href="../../img/Logotipo.png">
    <link rel="stylesheet" type="text/css" href="../libreria/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../libreria/css/styles2.css">
    <link rel="stylesheet" type="text/css" href="../libreria/css/styles4.css">
    <link rel="stylesheet" type="text/css" href="../libreria/css/style10.css">

</head>

<body>
    <header style="background-image: url(../../img/fondo-floral.jpg);background-size: cover; min-height: 20rem;">
        <a href="../../principal.html">
            <img src="../../img/Logotipo.png" alt="Logo" style="padding-top: 3rem;padding-left: 2rem;">
        </a>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="../../principal.html">Inicio</a></li>
            <li><a href="../../principal.html">Productos</a></li>
            <li><a href="../../store/contenido/acerca_de.html">Nosotros</a></li>
            <li><a href="../../store/contenido/buzonsug.html">Sugerencias</a></li>
            <li><a href="iniciar sesion.html">Iniciar Sesion</a></li>
        </ul>
    </nav>
    <button onclick="window.location.href='administrador.html'">Regresar</button>
    <div class="">
        <br/><br/>
        <?php
        if(!empty($datos)){
    ?>
    <table  border="1">
        <thead>
            <tr>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Tipo Documento</th>
                <th scope="col">Numero de Documento</th>
                <th scope="col">Direccion</th>
                <th scope="col">telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
   
        </thead>

        <tbody>
            <?php foreach ($datos as $d) { ?>
                <tr>
                    <td><?= $d['nombres_completa']?></td>
                    <td><?= $d['tipo_documento']?></td>
                    <td><?= $d['id_cliente']?></td>
                    <td><?= $d['direccion']?></td>
                    <td><?= $d['telefono']?></td>
                    <td><?= $d['correo']?></td>

                    <td>
                    <td><center><button class="edit" onclick="window.location.href='actualizarcliente.php?id=<?= $d['id_cliente']?>'">Editar</button>
                       <button class="delete" onclick="window.location.href='../controlador/controlador.php?id=<?= $d['id_cliente']?>&op=delete'">Eliminar</button></center>
                    </td>
                </tr> 
            <?php } ?>   
        </tbody>
        
    </table>
    <?php
        }else{
            echo "<h3>No ahi Usuarios Registrados</h3>";
        }
    ?>
    </div>
        
</body>

</html>