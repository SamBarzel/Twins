<?php include("template/cabecera_in.php"); ?>
<?php include("conexion/conexion.php");?>

<div class="col-md-3">
    <div class="card">
        <div class="card-header">
        Product Registration
        </div>
        <div class="card-body">
            <!-- Inicio del form -->
            <form method="POST" enctype="multipart/form-data" id="form1" onsubmit="return validarForm" action="alta_prod.php">
            <!-- enctype="multipart/form-data" recepciona los archivos png -->
            <div class="form-group">
                <label for="txtNombre">Name</label>
                <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del Producto" onkeyup="javascript:this.values=this.value.toUpperCase();">
            </div>
            <div class="form-group">
                <label for="txtPrecio">Price:</label>
                <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" placeholder="Precio del Producto">
            </div>
            <div class="form-group">
                <label for="txtImagen">Image:</label>
                <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen de Producto">
            </div>
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<br>
<?php
$result =select("productos","*");
?>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead> 
        <!-- Se hace la coneccion de la tabla -->
        <tbody>
            <?php 
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_object($result)){
                    ?>

                    <tr>
                    <td><?php echo $row->id ?></td>
                <td><?php echo $row->nombre ?></td>
                <td><?php echo $row->precio ?></td>
                <td><img src="../img/<?php echo $row->imagen; ?>" width="75" alt="">
                   
                </td>
                 <td>  
                    <a href="modificar_productos.php?id=<?php echo  
                    $row->id; ?>" class="btn btn-warning" >Modify</a>
                    <a href="eliminar_productos.php?id=<?php echo
                    $row->id; ?>" onclick="return confirmation()" class="btn btn-danger">Delete</a>
                    <hr>
                    
                </td> 
                    </tr>
                    <?php
                }
            } else {
                echo "there is no record";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include("template/pie_in.php");?>
