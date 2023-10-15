<?php session_start();
include("admi/conexion/conexion.php"); /*se manda llamar la conexion */

/*Obtencion de las variables */
$nombre = $_POST['nom'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mujer = $_POST['mujer'];
$hombre = $_POST['hombre'];
$rol = $_POST['rol'];

/* Variables Impresas */
echo "$nombre", "$apellidos", "$email", "$pass", "$sexo", "$rol";

if(
    !empty($nombre) &&
    !empty($apellidos) &&
    !empty($email) &&
    !empty($pass) &&
    /**!empty($mujer) &&
    !empty($hombre) &&*/
    !empty($rol)
){
    $cons = insert('usuarios','NULL,"'. $nombre .'"," ' . $apellidos . '","' . $email .'","'
    . $pass . '","' . $mujer . '","' . $hombre . '","' . $rol . '"');
    if ($cons){
        ?>

             <!-- El usuario se registro correctamente en la bd -->
             
             <meta http-equiv="refresh" content="0; URL=cuenta.php">
        <?php
    } else {
        ?>
             <!-- El usuario no se registro en la bd -->
             
             <meta http-equiv="refresh" content="0; URL=registro.php">
        <?php
    }
}
?>