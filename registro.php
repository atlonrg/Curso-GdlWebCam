<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>registro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha"><i class="far fa-calendar-alt"></i> 10/12/Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Las Palmas</p>
                    </div>
                    <!--info evento-->
                    <h1 class="nombre-sitio">GdlWebCam</h1>
                    <p class="eslogan">La mejr conferencia de <span>diseño web</span></p>
                </div>
            </div>
        </div>
        <!--hero-->
    </header>
    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
            <img src="img/logo.svg" alt="logo gdlwebcam">
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal clearfix">
                <a href="index.html" class="activo">Pagina Principal</a>
                <a href="conferencia.html">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitados</a>
                
            </nav>
        </div>
        <!--sierre contenedor-->
    </div>
    <!--sierre de barra navegasion-->

    <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>
        <form id="registro" class="registro" action="index.html" method="post">
            <div id="datos_usuario" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                </div>
                <div id="error" class="registro">

                </div>
            </div>
            <!--datos_usuario-->
            <div id="paquetes" class="paquetes">
                <h3>Elige el numero de boletos</h3>
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por dia <span>(viernes)</span></h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dia">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dia" size="4" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase todos los dias</h3>
                            <p class="numero">$50</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_completo">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_completo" size="4" placeholder="0">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tabla-precio">
                            <h3 class="text">Pase por 2 dias<span>(viernes/sabado)</span></h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dosdias">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dosdias" size="4" placeholder="0">
                            </div>
                        </div>
                    </li>
                </ul>
                <!--sierrepases-->
            </div>
            <!--paquetes-->
            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <div class="caja">
                    <div id="viernes" class="contenido-dia clearfix">
                        <h4>Viernes</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_01"
                                    value="taller_01"><time>10:00</time> Responsive Web Design</label>
                            <label><input type="checkbox" name="registro[]" id="taller_02"
                                    value="taller_02"><time>12:00</time> Flexbox</label>
                            <label><input type="checkbox" name="registro[]" id="taller_03"
                                    value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro[]" id="taller_04"
                                    value="taller_04"><time>17:00</time> Drupal</label>
                            <label><input type="checkbox" name="registro[]" id="taller_05"
                                    value="taller_05"><time>19:00</time> WordPress</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_01"
                                    value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                            <label><input type="checkbox" name="registro[]" id="conf_02"
                                    value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                            <label><input type="checkbox" name="registro[]" id="conf_03"
                                    value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_01"
                                    value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#viernes-->
                    <div id="sabado" class="contenido-dia clearfix">
                        <h4>Sábado</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_06"
                                    value="taller_06"><time>10:00</time> AngularJS</label>
                            <label><input type="checkbox" name="registro[]" id="taller_07"
                                    value="taller_07"><time>12:00</time> PHP y MySQL</label>
                            <label><input type="checkbox" name="registro[]" id="taller_08"
                                    value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                            <label><input type="checkbox" name="registro[]" id="taller_09"
                                    value="taller_09"><time>17:00</time> SEO en Google</label>
                            <label><input type="checkbox" name="registro[]" id="taller_10"
                                    value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro[]" id="taller_11"
                                    value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_04"
                                    value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones
                                en pocos días</label>
                            <label><input type="checkbox" name="registro[]" id="conf_05"
                                    value="conf_05"><time>17:00</time> Lugares para encontrar trabajo</label>
                            <label><input type="checkbox" name="registro[]" id="conf_06"
                                    value="conf_06"><time>19:00</time> Pasos para crear un negocio</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_02"
                                    value="sem_02"><time>10:00</time> Aprende a Programar</label>
                            <label><input type="checkbox" name="registro[]" id="sem_03"
                                    value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#sabado-->
                    <div id="domingo" class="contenido-dia clearfix">
                        <h4>Domingo</h4>
                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro[]" id="taller_12"
                                    value="taller_12"><time>10:00</time> Laravel</label>
                            <label><input type="checkbox" name="registro[]" id="taller_13"
                                    value="taller_13"><time>12:00</time> Crea tu propia API</label>
                            <label><input type="checkbox" name="registro[]" id="taller_14"
                                    value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                            <label><input type="checkbox" name="registro[]" id="taller_15"
                                    value="taller_15"><time>17:00</time> Creando Plantillas WordPress</label>
                            <label><input type="checkbox" name="registro[]" id="taller_16"
                                    value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro[]" id="conf_07"
                                    value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                            <label><input type="checkbox" name="registro[]" id="conf_08"
                                    value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                            <label><input type="checkbox" name="registro[]" id="conf_09"
                                    value="conf_09"><time>19:00</time> Frameworks y Open Source</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro[]" id="sem_04"
                                    value="sem_04"><time>14:00</time> Creando una App en Android</label>
                            <label><input type="checkbox" name="registro[]" id="sem_05"
                                    value="sem_05"><time>17:00</time> Creando una App en iOS</label>
                        </div>
                    </div>
                    <!--#domingo-->
                </div>
                <!--.caja-->
            </div>
            <!--#eventos-->
            <div id="resumen" class="resumen clearfix">
                <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camisa del evento $10 <small>(promecion 7%
                                    descuento.)</small></label><br>
                            <input type="number" min="0" id="camisa_evento" size="5" placeholder="0">
                        </div>
                        <!--orden1-->
                        <div class="orden">
                            <label for="etiquetas">Paquetes de 10 etiquetas $2 <small>(HTML5, CSS3, JavaScript,
                                    Chrome)</small></label>
                            <input type="number" min="0" id="etiquetas" size="5" placeholder="0">
                        </div>
                        <!--orden2-->
                        <div class="orden">
                            <label for="regalo">Seleccione un regalo</label><br>
                            <select id="regalo" required>
                                <option value="">>--Selecione un regalo--<< /option>
                                <option value="RX59">RX5900XT</option>
                                <option value="RT37">RTX3070</option>
                                <option value="RT38">RTX3080Ti</option>
                            </select>
                        </div>
                        <!--selecto-orden-->
                        <input type="button" id="calcular" class="button" value="Calcular">
                    </div>
                    <!--extras-->
                    <div class="total">
                        <p>Resumen</p>
                        <div id="lista-productos">

                        </div>
                        <p>Total</p>
                        <div id="suma-total">

                        </div>
                        <input id="btnRegistro" type="submit" class="button" value="Pagar">
                    </div>
                    <!--total-->
                </div>
                <!--caja-->
            </div>
            <!--resumen-->

        </form>
    </section>
    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>gdlwebcamp</span></h3>
                <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et.
                    Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia
                    congue orci. Maecenas luctus mi at ex
                    blandit vehicula. Morbi porttitor tempus euismod.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere minus cum fugiat eos! Totam magni
                    quidem doloribus, aut quia exercitationem sunt iure sed. Beatae adipisci quia, omnis fugiat porro
                    iusto consequuntur rerum exercitationem!</p>

            </div>
            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos Reservados GDLWEBCAMP 2016.
        </p>
    </footer>



    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <script src="Lettering.js/jquery.lettering.js"></script>
    <script src="jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>