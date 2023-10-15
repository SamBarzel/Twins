<?php include("template/cabecera_in.php"); ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1> Delete Product</h1>
        <hr>
        <?php 
        echo 'Este es el Id recibido = ' . $_GET['id']; // mostramos el id que se desea eliminar
        //Invocamos del function el select y la tabla
        $result = select_id("personalizados","id", $_GET['id']);
        //Realizamos un bucle que muestra el resultado
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_object($result)) {
        ?>
        <h3>Data to Delete</h3>
        <p>id: <?php echo $row->id; ?></p>
        <p>Name: <?php echo $row->nom; ?></p>
        <p>Price: <?php echo $row->email; ?></p>
        <p>Telephone: <?php echo $row->tel; ?></p>
        <p>Time: <?php echo $row->time; ?></p>
        <p>Size: <?php echo $row->size; ?></p>
        <p>Description: <?php echo $row->descripcion; ?></p>
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
<?php include("template/pie_in.php"); ?>