<?php include("template/cabecera_in.php"); ?>
<?php include("conexion/conexion.php");?>
<?php 
$result = select("personalizados","*");
?>
<h1>Custom Products</h1>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Thelephone</th>
                <th>Delivery Time</th>
                <th>Size</th>
                <th>Description</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_object($result)){
            ?>
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->nom?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->tel?></td>
                    <td><?php echo $row->time?></td>
                    <td><?php echo $row->size?></td>
                    <td><?php echo $row->descripcion?></td>
                    <td><a href="eliminar_perso.php?id=<?php echo
                     $row->id; ?>" onclick="return confirmation()" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php
                }
            } else {
                echo "no hay registros";
            }
            ?>
        </tbody>
    </table>
</div>
<?php include("template/pie_in.php"); ?>