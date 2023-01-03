<?php
include('con_db.php');


if (isset($_POST['register'])) {

    if (strlen($_POST['name'])  >= 1  &&  strlen($_POST['email']) >=  1 ) {
     $name = trim($_POST['name']);
     $email = trim($_POST['email']);
     $fecha_reg = ($_POST['fecha_reserva']);
     

     $consulta = "INSERT INTO datos( nombre, email, fecha_reg) VALUES ('$name','$email','$fecha_reg')";

     $resultado = mysqli_query($conex,$consulta);
     if ($resultado) {
        ?>
        <h3 class="ok">inscripcion correcta</h3>
        <?php
     }else{
        ?>
        <h3 class="bad">ups ah ocurrido un error</h3>
        <?php
     }
    }else{
        ?>
        <h3 class="bad">por favor complete los campos</h3>
        <?php
    }
}
 