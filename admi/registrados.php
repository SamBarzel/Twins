<?php include("template/cabecera.php");?>
<?php include("conexion/conexion.php");?>
<?php
$result =select("usuarios","*");
?>
<div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo Electronico</th>
            <th>rol</th>
        </tr>
    </thead> <!-- Despues de aqui se hace la coneccion de la tabla  -->
    <tbody>
        <?php //foreach() ?>
        <?php 
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_object($result)) {
        ?> 

             <tr>
                <td><?php echo $row->id_usuarios ?></td>
                <td><?php echo $row->nombre ?></td>
                <td><?php echo $row->apellidos ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->rol ?></td>                
             </tr>
             <?php
            }
        } else {
            echo "no hay ningun registro";
        }
        ?>
</table>
</div>
<?php include("template/pie.php"); ?>