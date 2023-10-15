<?php session_start();  
include("admi/conexion/conexion.php"); 
/*obtenemos las variables*/
$email = $_POST['email'];   
$pass = $_POST['pass'];
/*imprimir las variables */
echo "$email, $pass";

//Select para verificar si existe el usuario 
$result = select_id("usuarios","email","'$email'");

if(mysqli_num_rows($result) > 0){ // compara si existe el usuario 
	 while($row = mysqli_fetch_object($result)){ // Realizamos un bucle utilizando while.
		if($row->pass == $pass){ //compara el pass
            //Almacenamos el nombre de usuario en una variable de sesión usuario
            $_SESSION['rol'] = $row->rol;
            $_SESSION['usuario'] = $row->nombre;
            echo $_SESSION['usuario'].$_SESSION['rol'];
            ?>

            <script languaje="javascript" >alert("<?php echo "Bienvenido ".$row->nombre; ?>");</script>
            <?php 

            switch ($_SESSION['rol']) {
                case 'admi':
                    ?> <meta http-equiv="refresh" content="0;URL=admi/index.php" > <?php 
                    break;
                case "usuario":
                    ?> <meta http-equiv="refresh" content="0;URL=index_log.php" > <?php 
                    break;
            }
		    } else{
                ?> <script languaje="javascript" >alert("Contraseña Incorrecta");</script> 
                <meta http-equiv="refresh" content="0;URL=cuenta.php" >
                <?php 
                //exit();
		    }
	    }
} else{
    ?>  <script languaje="javascript" >alert("Usuario o Contraseña incorrecto!");</script> 
        <meta http-equiv="refresh" content="0;URL=cuenta.php" >
    <?php 
    //exit();
}
?>