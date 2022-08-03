<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="/imagenes/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&family=Merriweather&family=Montserrat:wght@700&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <title>Buenos Aires - Inicio</title>
    <!-- Framework para hacer la galeria-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="principal">
    
        <header>
            <nav class="menu">
                <ul class="mobile_menu">
                    <li><a class="activo" href="./index.php">Inicio</a></li>
                    <li><a href="./informacion.html">Informacíon</a></li>
                    <li><a href="./itinerario.html">Itinerario</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                </ul>

                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
            </nav>
        </header>
        
        <div class="banner">
            <h1>Buenos Aires</h1>
        </div>
        
        <main>
            <div class="buenosaires">
                <section>
                    <picture>
                        <source srcset="./imagenes/obeliscomobile.jpg" media="(max-width: 480px)">
                        <img src="./imagenes/obelisco.jpg" alt="Obelisco de Buenos Aires">   
                    </picture>
                    
                    <h2>Buenos Aires</h2>
                    <p>La ciudad es el resultado de una compleja interacción de factores culturales que sucedieron a partir de las múltiples tendencias 
                        y estilos arquitectónicos. <br>
                        
                        <span>Tanto sus calles como sus edificios heterogéneos 
                        definen a sus habitantes, a través de la identidad consecuente de su historia.<br>
                        El Obelisco de Buenos Aires es un monumento histórico considerado un ícono de la ciudad de Buenos Aires, construido en 1936 con motivo del cuarto centenario de la 
                        llamada primera fundación de la ciudad por Pedro de Mendoza.<br>
                        
                        No sólo existen antiguos e históricos edificios, la ciudad presenta una importante diversidad de arquitectura moderna y contemporánea.<br> 
                        Los sitios de interés arquitectónico quedan en evidencia sencillamente mientras uno recorre la ciudad a pié, a través de sus importantes
                        y diseñados espacios verdes.</span></p>
                </section>        
            </div>
        </main>

        <div class="actividades">
            <h2>Actividades</h2>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="carousel center-align">   
                            <div class="carousel-item">
                                    <img src="./imagenes/visitasguiadas.jpg" alt="Foto de una bibloteca">
                                    <a href="">Visitas Guiadas</a>
                            </div>
                            <div class="carousel-item">
                                <img src="./imagenes/gastronomia.jpg" alt="Foto cortando carne">
                                <a href="">Gastronomia</a>
                            </div>
                            <div class="carousel-item">
                                <img src="./imagenes/itinerario.jpg" alt="Foto del planetario">
                                <a href="./itinerario.html">Itinerario</a>
                            </div>  
                            <div class="carousel-item">
                                <img src="./imagenes/peshito.jpg" alt="Foto de un Perro">
                                <a href="https://www.youtube.com/watch?v=lHJN6IO6jYI" target="_blank">Peshito</a>
                            </div>  
                            <div class="carousel-item">
                                <img src="./imagenes/mishi.jpg" alt="Foto de un Gato">
                                <a href="https://www.youtube.com/watch?v=V9ggbiQdz_g" target="_blank">Mishito</a>
                            </div>  
                        </div>
                    </div> 
                </div>
                
            </div>

        </div>

        <div class="descubrir">
            <section>
                <h2>Sobre Buenos Aires</h2>
                <h2 class="app">App Travel Buenos Aires</h2>
                <p class="info_app">Con Travel Buenos Aires, accedé a toda la información para vivir una experiencia inolvidable.<br> Es ideal para optimizar tu tiempo, ahorrar papel y liberar espacio en tu mochila de viaje.<br>
                    ¿Lo mejor? La descarga es gratuita y la podés usar sin wifi para que la lleves siempre con vos.
                </p>
                <img class="logo_app" src="./imagenes/imgapp.jpg" alt="Logo de la Aplicacion Travel Buenos Aires">
                <p class="descarga_app"><span>Descargala en <a href="https://play.google.com/store/apps/details?id=ar.gob.buenosaires.baturismo" target="_blank">Android</a> | <a href="https://apps.apple.com/us/app/ba-turismo/id984827193?l=es" target="_blank">IOS</a></span></p>
                <img src="./imagenes/inferior.jpg" alt="Foto de unos edificios">
                <a class="waves-effect waves-light btn-large" href="./informacion.html">Leer más...</a>
            </section>    
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d210146.68168877432!2d-58.573383207134555!3d-34.615743688997895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos%20Aires%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1592606947439!5m2!1ses-419!2sar" width="1349" height="400" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>




    </div>
    
     <!-- Materialize framework-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="main.js"></script>
    <footer>
        <a>Buenos Aires, una gran ciudad para vivir, visitar, estudiar y hacer negocios.</a>
        <div class="footer"> 
            <ul class="profesionales">
                <li><a>Alumno: Nehuen Amaro </a></li>
                <li><a>Trabajo Practico / 2020 Para el primer cuatrimestre de la escuela Da Vinci</a></li>
            </ul>
            
            <ul class="prensa"> 
                <li><a>Materia: Maquetado y Desarollo Web</a></li>
                <li><a>Docente: Mabel Garcia</a></li>
            </ul>
        </div>
     </footer>

</body>
</html>