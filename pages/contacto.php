<?php

    include_once("../components/header.php");

?>

<main>

<section class="margin-left-right-top border">
        <div class="margin-left-right-top">
            <div>
                <div class="underlined">
                    <h1>¡No dudes en mandarnos tu consulta!</h1>
                </div>
                <div class="margin-top">
                    Envianos un mensaje a través de nuestro formulario de contacto o bien utilizando nuestro correo <a href=""> contacto@tripeando.com.ar</a>
                </div>
            </div>
            <div class="margin-top">
                <form action="datos_contacto.php" method="post" class="container-contact">
                        <div class="container-nombre-apellido">
                            <div class="item-na">
                                <label for="name" class="item-form font-bold-size">Nombre*</label>
                                <input type="text" id="name" name="name" class="item-form border-input" required placeholder="Ingresa tu nombre">
                            </div>                                                                
                            <div class="item-na">
                                <label for="surname" class="item-form font-bold-size">Apellido*</label>
                                <input type="text" id="surname" name="surname" class="item-form border-input" required placeholder="Ingresa tu apellido">
                            </div>                    
                        </div>

                        <div class="ccontainer-email-telefeno">
                            <div class="item-na">
                                <label for="email" class="item-form font-bold-size">Email*</label>
                                <input type="email" id="email" name="email" class="item-form border-input" required placeholder="Ingresa tu correo">
                            </div>
                            
                            <div class="item-na">
                                <label for="tel" class="item-form font-bold-size">Teléfono</label>
                                <input type="number" name="tel" id="tel" class="item-form border-input" placeholder="Ingresa tu teléfono">
                            </div>
                        </div>
                        <div class="container-na">                                                        
                            <div class="item-la">
                                <label for="asunto" class="item-form font-bold-size">Asunto*</label>                            
                                <input type="text" id="asunto" name="asunto" class="item-form border-input" required placeholder="Ingresa el asunto de tu consulta">                            
                            </div>
                        </div>
                        <div class="container-na">
                            <div class="item-la">
                                <label for="consulta" class="item-form font-bold-size">¿En qué te podemos ayudar?*</label>                    
                                <textarea class="item-form-text border-text-area margin-top" id="consulta" name="consulta " required placeholder="Ingresa tu consulta" require></textarea>
                            </div>
                        </div>                     
                            
                        </div>
                        <div class="container-na">
                            <div class="item-but">
                                <input type="submit" value="Enviar" class="button-enviar">                                
                            </div>
                        </div>

                        <div class="container-na">
                            <div class="item-la">
                                <label for="consulta" class="item-form font-bold-size">* Campos obligatorios</label>                                                    
                            </div>
                        </div> 
                                          
                </form>
            </div>
        </div>
    </section>


</main>

<?php

    include_once("../components/footer.php");

?>