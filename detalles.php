<?php include("template/cabecera.php"); ?>	
<?php include("admi/conexion/conexion.php"); ?>	
<?php 

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : ''; // validacion por si no existe te lo regresa vacio

if($id == '' || $token =='' ){
    echo 'Error al procesar la coneccion';
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if($token == $token_tmp){

        $result = select_id("productos","id", $_GET['id']);
        if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_object($result)) {
?>
 <hr><br> 
 
<div class="col-md-4">
    <div class="card">
    <img src="img/<?php echo $row->imagen; ?>" width="355" alt="">
    </div>
</div>
<br><br><br>
<div class="col-md-6"> <br>
        <h2><?php echo $row->nombre ?></h2>
        <h2><?php echo $row->precio ?></h2>
        <br>
        <td>
        <a href="ticket.php?id=<?php echo  
                    $row->id; ?>" class="btn btn-success" >Ticket</a>
                    <a href="tienda.php?id=<?php echo
                    $row->id; ?>" class="btn btn-warning">Cancelar</a>
                    <hr>
        </td>
</div>


<?php 
   }
}

} else {
echo 'Error al procesar la coneccion';
exit;
}
}
?>
<?php include("template/pie.php"); ?>