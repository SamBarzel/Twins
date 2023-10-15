<?php include("template/cabecera_in.php");?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h2>Show inserted Products</h2>
        <hr>
        <?php 

        //Obtenemos las variables
      
        /*$nombre = $_POST['txtNombre'];
        $precio = $_POST['txtPrecio'];
        $imagen = $_FILES['txtImagen'];*/

       $nombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
       $precio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
       $imagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
       $accion=(isset($_POST['accion']))?$_POST['accion']:"";
       $fecha = new DateTime();
       $nombreArchivo=($imagen!="")?$_FILES["txtImagen"]["name"]:"imagen.jpg";

       $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

       if($tmpImagen!=""){
        move_uploaded_file($tmpImagen,"../img/".$nombreArchivo);
       }
       

        ?>

        <h2>Received Data</h2>
        <hr>
        <p>The following data was entered</p>
        <?php 
        //Se muestran los datos recibidos <h3>$id</h3>
        echo "
             <h3>$nombre</h3>
             <h3>$precio</h3>
             <h3>$imagen</h3>";


        //Se realiza la insercion de los datos de los productos
        $cons = insert(
               'productos',
               "NULL,'$nombre','$precio','$imagen' ");
        if($cons){
        ?>
             <p>The Pruduct was correctly added to the Bd</p>
             <meta http-equiv="refresh" content="5; URL=index.php">
        <?php
        } else {
        ?>
                <p>The product could not be inserted into the DB</p>
        <?php
        }
        ?>        
    </div>
</div>
<?php include("template/pie_in.php");?>