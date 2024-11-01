<?php

$nombre;


if (isset($_POST['name'])) {
    $nombre = $_POST['name'];    

    include_once('../components/header.php');
    print "

        <div class='center-contact'>
            <div>
                <h1 class='container-fluid'>¡Gracias por contactarnos $nombre!</h1>
            </div>
            <div>
                <p class='container-fluid'> Hemos recibido tu mensaje y nos pondremos en contacto a la mayor brevedad posible. <br>Agradecemos tu interés y te responderemos dentro de las próximas 24-48 horas.</p>
            </div>

            <figure>
                <img src='../img/contacto.jpg' alt='Contacto'>
            </figure>
        </div>
    
    ";
    include_once('../components/footer.php');

}


?>