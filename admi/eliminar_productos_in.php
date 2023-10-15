<?php include("template/cabecera_in.php") ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1> Delete Product</h1>
        <hr>
        <?php 
        echo 'Este es el Id recibido = ' . $_GET['id']; // mostramos el id que se desea eliminar
        //Invocamos del function el select y la tabla
        $result = select_id("productos","id", $_GET['id']);
        //Realizamos un bucle que muestra el resultado
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_object($result)) {
        ?>
        <h3>Data to Delete</h3>
        <p>id: <?php echo $row->id; ?></p>
        <p>Name: <?php echo $row->nombre; ?></p>
        <p>Price: <?php echo $row->precio; ?></p>
        <p>Image: <?php echo $row->imagen; ?></p>
        <?php
            }
            $result = delete("productos","id", $_GET['id']);
        } else {
            echo "El registro no existe";
        }
        ?>
         <meta http-equiv="refresh" content="5; URL=registro.php">
    </div>
</div>
<?php include("template/pie_in.php") ?>