<?php include("template/cabecera_in.php") ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1>Modify Product</h1>
        <hr>
        <?php 
        echo "Este es el Id del Producto a Modificar = " . $_GET['id'];
        //Invocamos el function, select y la tabla
        $result = select_id("productos","id", $_GET['id']);
        //Se realiza un bucle para mostrar un resultado
        if(mysqli_num_rows($result) > 0 )  {
            while($row = mysqli_fetch_object($result)) {
        ?>
         <div class="card-body">
<!-- Inicio del form -->    
<form method="POST" enctype="multipart/form-data" id="form1" onsubmit="return validarForm" action="actualizar_producto.php" > <!-- enctype="multipart/form-data" recepciona los archivos png -->
<table>
    <div class = "form-group">
    <label for="txtNombre">Name:</label>
    <input type="text" class="form-control" name="txtId" id="txtId" placeholder="Nombre del Producto" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->id; ?>" hidden />
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del Producto" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->nombre; ?>"/>
    </div>

    <div class = "form-group">
    <label for="txtPrecio">Price:</label>
    <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" placeholder="Precio del Producto" value="<?php echo $row->precio; ?>"/>
    </div>

    <div class = "form-group">
    <label for="txtImagen">Image:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del Producto"/>
    </div>

    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Actualizar" class="btn btn-success">Update</button>
    </div>
</form>
    </div>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nombre ?></td>
                <td><?php echo $row->precio ?></td>
                <td><img src="../img/<?php echo $row->imagen; ?>" width="75" alt="">
            </tr>
        <?php

            }
        } else {
            echo "There is no record";
        }
        ?>
        </table>
    </div>
</div>
<?php include("template/pie_in.php") ?>