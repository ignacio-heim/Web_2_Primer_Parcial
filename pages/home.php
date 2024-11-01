<?php

    include_once("../components/header.php");

?>

<main class="container-fluid">
    <section >
        <h1>Agencia de viajes Tripeando</h1>    
        
        <figure>
            <img src="../img/imagen_home.jpeg" class="img-fluid" alt="Imagen de playa paradisiaca">
        </figure>
    
    <h2>Te ayudamos a elegir tu próxima aventura. Esa que tanto deseaste.</h2>
    <p>Elige el destino donde quieras viajar.</p>
    <div class="container-fluid margin-bottom-top">
        
        <form class="row g-3 bg-color-blue padding-bottom border-radius width" action="reserva.php" method="get">
            <div class="col-auto">
                <label for="origen" class="text-decoration">ORIGEN</label>                
                <input type="text" class="form-control" name="origen" id="origen" placeholder="Origen" required>
            </div>
            <div class="col-auto">
                <label for="destino" class="text-decoration">DESTINO</label>                
                <input type="text" class="form-control" name="destino" id="destino" placeholder="Destino" required>
            </div>
            <div class="col-auto">        
                <label for="fechas" class="text-decoration">FECHAS</label> 
                    <div class="row">    
                        <div class="col no-padding-right">
                            <input type="text" class="form-control" name="fecha_ida" id="fechas" placeholder="Desde" onfocus="(this.type='date')"
                            onblur="(this.type='text')" required>
                        </div>
                        <div class="col no-padding-left">
                            <input type="text" class="form-control" name="fecha_vuelta" id="fechas" placeholder="Hasta" onfocus="(this.type='date')"
                            onblur="(this.type='text')" required>
                        </div>
                    </div>  
            </div>  

            <div class="col-auto">
            <label for="pasajeros_cantidad" class="text-decoration">CANTIDAD DE PASAJEROS</label>                
                <input type="number" class="form-control" name="pasajeros" id="pasajeros_cantidad" placeholder="Cantidad de pasajeros" required>
            </div>            
            <div class="col-auto">            
            <label for="visually-hidden"></label>      
                <input type="submit" class="btn btn-success form-control">
            </div>
            
        </form>
    </div>
    </section>
    <section class="margin-top">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card">
                        <img src="../img/santo_domingo.jpg" class="card-img-top" alt="Santo Domingo, República Dominicana">
                        <div class="card-body">
                            <h5 class="card-title">Santo Domingo</h5>
                            <p class="card-text">La vibrante capital de la República Dominicana, combina historia, cultura y playas exóticas. Su Ciudad Colonial, declarada Patrimonio de la Humanidad, está llena de monumentos históricos como la primera catedral de América. Además de su rica herencia, ofrece una animada vida nocturna, deliciosa gastronomía caribeña y la cercanía a playas como Boca Chica y Juan Dolio. Perfecto para quienes buscan una mezcla de historia, cultura y descanso tropical.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../img/Maceio.jpg" class="card-img-top" alt="Maceio, Brasil">
                        <div class="card-body">
                            <h5 class="card-title">Maceió</h5>
                            <p class="card-text">La capital del estado de Alagoas en Brasil, es un paraíso tropical conocido por sus playas de aguas cristalinas, piscinas naturales y cocoteros. Con playas urbanas como Pajuçara y Ponta Verde, además de destinos cercanos como Maragogi y Gunga, es ideal para quienes buscan relajarse en playas paradisíacas. Su vibrante cultura local se refleja en la gastronomía de mariscos frescos y en la hospitalidad brasileña. Un destino perfecto para unas vacaciones relajantes frente al mar.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="../img/cartagena.jpg" class="card-img-top" alt="Cartagena, Colombia">
                    <div class="card-body">
                        <h5 class="card-title">Cartagena</h5>
                        <p class="card-text">Ubicada en la costa caribeña de Colombia, es una ciudad llena de encanto histórico y belleza tropical. Su Ciudad Amurallada, Patrimonio de la Humanidad, ofrece calles coloniales coloridas, plazas animadas y arquitectura fascinante. Además de su rica historia, Cartagena cuenta con playas como Bocagrande y las paradisíacas Islas del Rosario, perfectas para relajarse. Con una mezcla de cultura, historia y paisajes costeros, es un destino ideal para unas vacaciones inolvidables.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php

    include_once("../components/footer.php");

?>