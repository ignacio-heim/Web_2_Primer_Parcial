<?php

    include_once("../components/header.php");

?>

<main>

    <?php
      
      $origen;
      $destino;
      $desde;
      $hasta;
      $pasajeros;

      if(isset($_GET['origen']) && isset($_GET['destino']) && isset($_GET['fecha_ida']) && isset($_GET['fecha_vuelta']) && isset($_GET['pasajeros'])) {
        $origen = $_GET['origen'];
        $destino = $_GET['destino'];
        $desde = $_GET['fecha_ida'];
        $hasta = $_GET['fecha_vuelta'];
        $pasajeros = $_GET['pasajeros'];
        
        echo "
            <div class='container-fluid'>
                <div>
                    <h1>¡Excelente opción!</h1>
                </div>
                <div>
                    <p> Los datos de tu viaje son:</p> 
                    <ul>
                        <li>Lugar de origen $origen.</li>
                        <li>Lugar de destino $destino.</li>
                        <li>Fecha de ida: $desde</li>
                        <li>Fecha de vuelta: $hasta</li>
                        <li>Cantidad de pasajeros: $pasajeros.  </li>
                    </ul> 
              </div>       
            </div>
              <section class='container-fluid'>
                <h2>Completa tus datos para finalizar la reserva...</h2>    
                <form action='datos_reserva.php' method='post' enctype='multipart/form-data'>
                <div class='container-row'>
                <div class='width-row'>
                  <div class='container-datos-column'>
                    <fieldset class='seccion-pago seccion-max-width border'>
                        <legend class='font-decoration'>1 - Datos Personales</legend>
                            <div>
                                <div>
                                    <label for='name' class='item-form font-bold-size'>Nombre*</label>
                                </div>
                                <div>
                                    <input type='text' id='name' name='name' class='item-form border-bottom' required placeholder='Ingresa tu nombre'>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for='surname' class='item-form font-bold-size'>Apellido*</label>
                                </div>
                                
                                <div>
                                    <input type='text' id='surname' name='surname' class='item-form border-bottom' required  placeholder='Ingresa tu apeliido'>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for='dni' class='item-form font-bold-size'>DNI*<span class='text-small'>(sin puntos ni espacios)</span></label>
                                </div>
                                <div>
                                    <input type='number' id='dni' name='dni' class='item-form border-bottom' required placeholder='Ingresa tu DNI'>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for='email' class='item-form font-bold-size'>Email*</label>
                                </div>
                                <div>
                                    <input type='email' id='email' name='email' class='item-form border-bottom' required placeholder='Ingresa tu email'>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for='tel' class='item-form font-bold-size'>Teléfono</label>
                                </div>
                                <div>
                                    <input type='number' id='tel' name='tel' class='item-form border-bottom' placeholder='Ingresa tu teléfono'>
                                </div>
                            </div>
                            
                  </fieldset>
                                  
                <fieldset class='seccion-pago seccion-max-width border'>
                <legend class='font-decoration'>2 - Pago</legend>
                <div>
                    <label for='numero-tarjeta'class='item-form font-bold-size'>Número*</label>
                </div>
                <div>
                    <input type='number' name='numero-tarjeta' id='numero-tarjeta' class='item-form border-bottom' required placeholder='Ingresa el número de tu tarjeta'>
                </div>  
                <div>
                    <label for='name-tarjeta' class='item-form font-bold-size'>Nombre y Apellido de la tarjeta*</label>
                </div>
                <div>
                    <input type='text' name='name-tarjeta' id='name-tarjeta' class='item-form border-bottom' required placeholder='Ingresa el nombre y apellido de tu tarjeta'>
                </div>  
                <div>
                    <label for='fecha-ven' class='item-form font-bold-size'>Fecha de Vencimiento*</label>
                </div>
                    <div class='item-form'>
                        <select name='mes' id='fecha-ven' required>
                            <option value='' selected disabled>MM</option>
                            <option value='1'>01</option>
                            <option value='2'>02</option>
                            <option value='3'>03</option>
                            <option value='4'>04</option>
                            <option value='4'>05</option>
                            <option value='4'>06</option>
                            <option value='4'>07</option>
                            <option value='4'>08</option>
                            <option value='4'>09</option>
                            <option value='4'>10</option>
                            <option value='4'>11</option>
                            <option value='4'>12</option>
                        </select> 
                        <select name='año' required >
                            <option value='' selected disabled>AA</option>
                            <option value='1'>24</option>
                            <option value='2'>25</option>
                            <option value='3'>26</option>
                            <option value='4'>27</option>
                            <option value='4'>28</option>
                            <option value='4'>29</option>
                            <option value='4'>30</option>
                            <option value='4'>31</option>
                            <option value='4'>32</option>
                            <option value='4'>33</option>
                            <option value='4'>34</option>
                            <option value='4'>35</option>
                        </select> 
                    </div>
                <div>
                    <label for='cod-seg'class='item-form font-bold-size'>Código de Seguridad*</label>
                </div>
                <div>
                    <input type='number' name='cod-seg' id='cod-seg' class='item-form border-bottom' required placeholder='Ingresa el codigo de tu tarjeta'>
                </div> 
                <div>
                    <label for='dni-pagador' class='item-form font-bold-size'>DNI del pagador*</label>
                </div>
                <div>
                    <input type='number' name='dni-pagador' id='dni-pagador' class='item-form border-bottom' required placeholder='Ingresa el DNI del titular de la tarjeta'>
                </div> 
                </fieldset>
                <div>
                    <label class='item-form'>* Campos obligatorios</label>
                </div>
            </div>
            
            <div class='width-row'>
                <fieldset class='seccion-pago pago-box-right position-sticky border'>
                    <legend class='font-decoration'>3 - Cargar foto DNI</legend>
                    <div>
                        <label for='foto_1'>Cargar foto de frente</label>
                        <input type='file' name='foto_1' id='foto_1' accept='image/*' required>  
                    </div>
                    <div>
                        <label for='foto_2'>Cargar foto de dorso</label>
                        <input type='file' name='foto_2' id='foto_2' accept='image/*' required>                        
                    </div>              
                
                </fieldset>

                <fieldset class='seccion-pago pago-box-right position-sticky border'>
                    <legend class='font-decoration'>4 - Confirmar reserva</legend>        
                    <div>
                        <input type='checkbox' name='' id='' checked>
                        <label for=''>Quiero recibir el newsletter con promociones.</label>
                    </div>                
                    <input type='submit' value='Confirmar compra' class='button-enviar font'>
                
                </fieldset>
            </div>
        </div>        
    </form> 
    </section>
</main>
            
              ";

      } else {
        echo "
            <div class='container-fluid center-contact'>
                <h1 class='container-fluid'>¡Ups! Parece que no hay ningún viaje seleccionado.</h1>
            </div>";

      }

    ?>



<?php

    include_once("../components/footer.php");

?>