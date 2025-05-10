<?php
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM clientes WHERE id_cliente=$id;";
    $consulta = mysqli_query($cnx,$sql);
    while ($fila = mysqli_fetch_assoc($consulta)) {
        $datos[] = $fila;
    }
    mysqli_close($cnx);
    unset($sql, $cnx);

?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<head>
    <title>MODIFICAR Cliente</title>
    <meta name="author" content="Tienda">
    <meta name="Description" content="Ventas">
    <meta name="keywords" content="ropa,blusas,pantalones,chaquetas,vestidos">
    <meta charset="UTF-8">
    <link rel="icon" type="image-x/icon" href="../../img/Logotipo.png">
    <link rel="stylesheet" type="text/css" href="../libreria/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../libreria/css/styles6.css">




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
    <center>
    <?php foreach ($datos as $d) { ?> 
        <form action="../controlador/controlador.php" method="POST">

            <div class="container">

                <label for="ndoc">NUMERO DE DOCUMENTO</label>
                <?php echo $d['id_cliente'] ?> <input type="hidden" name="ndoc" id="ndoc" value="<?=$d['id_cliente'] ?>">
                <br>
                <label for="nombre">NOMBRES COMPLETOS</label>
                <input type="text" name="nombre" id="nombre" value="<?=$d['nombres_completa'] ?>">
                <br>
                <br>
                <label for="tdoc">TIPO DE DOCUMENTO</label>
                <select name="tdoc" id="tdoc">
                    <option value="No selecciono">Seleccionar</option>
                    <option value="CARNET DE EXTRANJERIA">CARNET DE EXTRANJERIA</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="PTP">PTP</option>
                    <option value="DNI">DNI</option>
                </select>
                <br>
                <br>
                
                <br>
                <label for="direc">DIRECCION</label>
                <br> <input type="text" name="direc" id="direc" cols="30" rows="5" value="<?=$d['direccion']?>">
                <br>
                <br>
                <label for="ciud">CIUDAD</label>
                <select name="ciud" id="ciud">
                    <option value="No selecciono">Seleccionar</option>
                    <option value="GUADALUPITO">GUADALUPITO</option>
                    <option value="SANTA">SANTA</option>
                    <option value="CHIMBOTE">CHIMBOTE</option>
                    <option value="NVO CHIMBOTE">NVO CHIMBOTE</option>
                </select> <BR>
                <br>
                <label for="telef">TELEFONO</label>
                <input type="number" name="telef" id="telef" value="<?=$d['telefono']?>"><br>
                <br>
                <label for="correo">CORREO ELECTRONICO</label>
                <input type="email" name="correo" id="correo" value="<?=$d['correo']?>"><br>
                <br>
                <label for="contra">CONTRASEÑA</label>
                <input type="password" placeholder="" id="contra" name="contra" value="<?=$d['password']?>"/>
                <br>
            </div>
            <button type="submit" name="btnModificarCliente" value="ok"> MODIFICAR</button>
            <script src="../libreria/js/script8.js"></script>
        </form>
        <?php } ?>    

</body>

</html>