<?php include("template/cabecera.php"); ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1> Eliminar Producto</h1>
        <hr>
        <?php 
        echo 'Este es el Id recibido = ' . $_GET['id']; // mostramos el id que se desea eliminar
        //Invocamos del function el select y la tabla
        $result = select_id("personalizados","id", $_GET['id']);
        //Realizamos un bucle que muestra el resultado
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_object($result)) {
        ?>
        <h3>Datos a Eliminar</h3>
        <p>id: <?php echo $row->id; ?></p>
        <p>Nombre: <?php echo $row->nom; ?></p>
        <p>Precio: <?php echo $row->email; ?></p>
        <p>Telefon: <?php echo $row->tel; ?></p>
        <p>Tiempo: <?php echo $row->time; ?></p>
        <p>Tamaño: <?php echo $row->size; ?></p>
        <p>Descripcion: <?php echo $row->descripcion; ?></p>
        <?php
            }
            $result = delete("personalizados","id", $_GET['id']);
        } else {
            echo "El registro no existe";
        }
        ?>
         <meta http-equiv="refresh" content="5; URL=personalizados.php">
    </div>
</div>
<?php include("template/pie.php"); ?>