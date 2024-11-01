<?php

$nombre;
$apellido;
$email;


$temporal_1 = $_FILES['foto_1']['tmp_name'];
$nombre_1 = time()."_".$_FILES['foto_1']['name'];
$new_nombre_1 = str_replace(" ","_",$nombre_1);

$temporal_2 = $_FILES['foto_2']['tmp_name'];
$nombre_2 = time()."_".$_FILES['foto_2']['name'];
$new_nombre_2 = str_replace(" ","_",$nombre_2);

move_uploaded_file($temporal_1,"../img/archivos/$new_nombre_1");
move_uploaded_file($temporal_2,"../img/archivos/$new_nombre_2");


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['surname'];
    $email = $_POST['email'];
    

    include_once('../components/header.php');
    print "

        <div class='container-fluid center-contact'>
            <h1>¡Felicitaciones $nombre $apellido! Tu reserva ha sido confirmada.</h1>
            
            <p>Tu número de reserva es #21356. Vas a recibir todos los datos de la misma al correo $email</p>

            <p>Ante cualquier consulta sobre tu reserva, hacé click <a href='contacto.php'>aquí</a>.</p>

            <p>¡Gracias por elegirnos!</p>

            <figure>
                <img src=../img/archivos/$new_nombre_1 alt=$new_nombre_1 class='wh-images'>

                <img src=../img/archivos/$new_nombre_2 alt=$new_nombre_2 class='wh-images'>

            </figure>
        </div>
    
    ";
    include_once('../components/footer.php');

}


?>