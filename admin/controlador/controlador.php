<?php
    include("conexion.php");
    $op = $_GET["op"];

    if(!empty($_POST["btnRegistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["tdoc"]) and !empty($_POST["ndoc"]) and !empty($_POST["direc"]) and !empty($_POST["ciud"]) and
        !empty($_POST["telef"]) and !empty($_POST["correo"]) and !empty($_POST["contra"])){

            $nombre = $_POST["nombre"];
            $tdoc = $_POST["tdoc"];
            $ndoc = $_POST["ndoc"];
            $direc = $_POST["direc"];
            $ciud = $_POST["ciud"];
            $telef = $_POST["telef"];
            $correo = $_POST["correo"];
            $contra = $_POST["contra"];

            $sql = "INSERT INTO clientes(nombres_completa, tipo_documento, id_cliente, direccion, ciudad, telefono, correo, password) VALUES ('$nombre','$tdoc','$ndoc','$direc','$ciud','$telef','$correo','$contra');";
            
            $consulta = mysqli_query($cnx,$sql);
            mysqli_close($cnx);
            unset($sql, $cnx);
            header('location: \PROYECTO FINAL TALLER/admin/contenido/iniciar sesion.html');
        }else{
            header('location: \PROYECTO FINAL TALLER/admin/contenido/registrate.html');
        }
    }

    if(!empty($_POST["btnInicioCliente"])){
        if(!empty($_POST["txtco"]) and !empty($_POST["password"])){
            $correo = $_POST["txtco"];
            $contra = $_POST["password"];
            $sql =  "SELECT COUNT(*) as contar FROM clientes WHERE correo='$correo' and password='$contra';";
            $consulta = mysqli_query($cnx,$sql);
            $array = mysqli_fetch_array($consulta);
            if($array['contar']>0){
                mysqli_close($cnx);
                unset($sql, $cnx);
                header('location: \PROYECTO FINAL TALLER/principal.html');
            }else{
                mysqli_close($cnx);
                unset($sql, $cnx);
                header('location: \PROYECTO FINAL TALLER/admin/contenido/iniciar sesion.html');
            }
            
        }else{
            header('location: \PROYECTO FINAL TALLER/admin/contenido/iniciar sesion.html');
        }
    }

    if(!empty($_POST["btnInicioAdmin"])){
        if(!empty($_POST["txtco"]) and !empty($_POST["password"])){
            $correo = $_POST["txtco"];
            $contra = $_POST["password"];
            $sql =  "SELECT COUNT(*) as contar FROM usuario WHERE correo='$correo' and password='$contra'";
            $consulta = mysqli_query($cnx,$sql);
            $array = mysqli_fetch_array($consulta);
            if($array['contar']>0){
                mysqli_close($cnx);
                unset($sql, $cnx);
                header('location: \PROYECTO FINAL TALLER/admin/contenido/administrador.html');
            }else{
                mysqli_close($cnx);
                unset($sql, $cnx);
                header('location: \PROYECTO FINAL TALLER/admin/contenido/iniciar sesion admi.html');
            }
            
        }else{
            header('location: \PROYECTO FINAL TALLER/admin/contenido/iniciar sesion admi.html');
        }
    }

    if(!empty($_POST["btnArticulo"])){
        if(!empty($_POST['nombre']) and !empty($_POST['descripcion']) and !empty($_POST['precio']) and !empty($_POST['image']) and 
        !empty($_POST['colores']) and !empty($_POST['tallas']) and !empty($_POST['metodos_pago']) and !empty($_POST['codigo']) and 
        !empty($_POST['categoria'])){
            
            $nombre = $_POST['nombre'];
            $descrip = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $colores = $_POST['colores'];
            $talla = $_POST['tallas'];
            $m_pago = $_POST['metodos_pago'];
            $codigo = $_POST['codigo'];
            $categoria = $_POST['categoria'];
            $image = $_FILES['image']['tmp_name'];
            echo $_POST['image'];
            //$imgContent = file_get_contents($image);
            
            $sql = "INSERT INTO producto (id_producto, nombre_producto, descripcion, precio, talla, color, categoria, imagen) VALUES 
            (NULL, '$nombre','$descrip','$precio','$talla','$colores','$categoria','$image')";
            
            $consulta = mysqli_query($cnx,$sql);
            mysqli_close($cnx);
            unset($sql, $cnx);
            header('location: \PROYECTO FINAL TALLER/admin/contenido/administrador.html');
        }else{
            header('location: \PROYECTO FINAL TALLER/admin/contenido/index.html'); 
        }
    }
    

    if(!empty($op)){
        if(!empty($_GET["id"]) ){
               $ID = $_GET["id"];
               $sql = "DELETE FROM clientes WHERE id_cliente=$ID";
               $consulta = mysqli_query($cnx,$sql);
               mysqli_close($cnx);
               unset($sql, $cnx);
               header('location: \PROYECTO FINAL TALLER/admin/contenido/usuario.php');
        }
    }

    if(!empty($_POST["btnModificarCliente"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["tdoc"]) and !empty($_POST["direc"]) and !empty($_POST["ciud"]) and
        !empty($_POST["telef"]) and !empty($_POST["correo"]) and !empty($_POST["contra"])){
            $nombre = $_POST["nombre"];
            $tdoc = $_POST["tdoc"];
            $ndoc = $_POST["ndoc"];
            echo $ndoc;
            $direc = $_POST["direc"];
            $ciud = $_POST["ciud"];
            $telef = $_POST["telef"];
            $correo = $_POST["correo"];
            $contra = $_POST["contra"];

            $sql = "UPDATE clientes SET nombres_completa='$nombre',tipo_documento='$tdoc',direccion='$direc',ciudad='$ciud',telefono='$telef',correo='$correo',password='$contra' WHERE id_cliente=$ndoc";
            
            $consulta = mysqli_query($cnx,$sql);
            mysqli_close($cnx);
            unset($sql, $cnx);
            header('location: \PROYECTO FINAL TALLER/admin/contenido/usuario.php');
        }else{
            header('location: \PROYECTO FINAL TALLER/admin/contenido/usuario.php');
        }
    }


?>
