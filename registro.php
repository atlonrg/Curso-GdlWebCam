<?php include_once 'includes/templates/header.php'; ?>

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
    <?php include_once 'includes/templates/footer.php'; ?>