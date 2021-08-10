<?php 

include("con_bd.php");
// si isset es para la ejecucion del boton registro donde se llama el name se se le asigna 
if (isset($_POST['registro'])) {
    // aqui es la variable si se cumple una de las funciones asignada 
    if (strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok"> Te has inscripto correctamente!</h3>
            <?php
        } else{
            ?>
            <h3 class="bad"> Ups ha ocurrido un Error!</h3>
            <?php
        }   
    }   else {
            ?>
            <h3 class="bad"> Complete los Campos!</h3>
            <?php
    }
}

?>


