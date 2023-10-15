<?php include("template/cabecera.php"); ?>
<?php include("conexion/conexion.php"); ?>

<div>
    <div>
        <h1>Actualizar Productos</h1>
    </div>
    <div>
        <h2>Muestra de insercion de Productos</h2>
        <?php
        $id=(isset($_POST['txtId']))?$_POST['txtId']:"";
        $nombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $precio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
        $imagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
        //$accion=(isset($_POST['accion']))?$_POST['accion']:"";
        $fecha = new DateTime();
        $nombreArchivo=($imagen!="")?$_FILES["txtImagen"]["name"]:"imagen.jpg";
 
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
 
        if($tmpImagen!=""){
         move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }
        ?>
        <h2>Datos Recibidos</h2>
        <p>Usted Ingreso los Siguientes Datos</p>
        <?php 
        
        echo "
             <h3>$nombre</h3>
             <h3>$precio</h3>
             <h3>$imagen</h3>";

             $campos = "nombre = '$nombre'";
             $campos .= ", precio = '$precio'";
             $campos .= ", imagen = '$imagen'";

             echo $campos;
             $where = "id = $id";

             $cons = update('productos', $campos, $where);

             if($cons) { 
            ?>
               <h2>La Modificacion se hizo de manera exitoza en la Base de Datos</h2>            
            <?php
             } else{
            ?>
                <h2>La Modificacion no se pudo hacer en la Base de Datos</h2>
            <?php
             }
             ?>
             <meta http-equiv="refresh" content="5;URL=registro.php">
                       
    </div>
</div>

<?php include("template/pie.php"); ?>