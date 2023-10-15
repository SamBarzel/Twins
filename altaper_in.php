<?php include("template/cabecera_log.php");?>
<?php include("admi/conexion/conexion.php");?>
<section>
    <div>
        <h2>Data sent</h2>
        <br>

        <?php 
        /*Obtenemos las Variables */
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $time = $_POST['time'];
        $size = $_POST['tamaño'];
        $descripcion = $_POST['desc'];
        ?>
        <h3>Resived Data</h3>
        <br>
        <p>Entered the Following Data</p>
        <?php 
        //Se saca impreso los datos
        echo"
        <h4> Nombre del Usuario: $nom </h4>
        <h4> Correo Electronico: $email </h4>
        <h4> Numero de Telefono: $tel </h4>
        <h4> Dia y Hr de Entrega: $time </h4>
        <h4> Tamaño del Producto: $size </h4>
        <h4> Dewcripcion del Producto: $descripcion </h4>";

        //Se realiza la Insercion de datos de Form
        $cons = insert('personalizados',"NULL,'$nom','$email','$tel','$time','$size','$descripcion'");

        if($cons){
            ?>
            <p>Data was saved correctly</p>
            <meta http-equiv="refresh" content="5; URL=index_log.php">
        <?php
        } else {
        ?> <p>Data not saved correctly</p>
        <meta http-equiv="refresh" content="5; URL=pedidosespeciales_log.php">
        <?php
        }
        ?>
    </div>
</section>
<?php include("template/pie_log.php");?>