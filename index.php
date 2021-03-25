
<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel autem odio velit. Quas nemo eum earum
            laboriosam
            reiciendis, alias nesciunt hic repudiandae sint, rem, officiis dolores officia sapiente libero molestias
            possimus
            voluptatum nihil facere assumenda. Autem porro perspiciatis.
        </p>
    </section>
    <!--fin section-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv">
            </video>
        </div>
        <!--video fondo-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fa fa-code"></i> Talleres</a>
                        <a href="#conferencias"><i class="fa fa-comment"></i> Conferencias</a>
                        <a href="#seminarios"><i class="fa fa-university"></i> Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3, y JavaScript</h3>
                            <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Juan Pablo De la torre Valvez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive web design</h3>
                            <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Juan Pablo De la torre Valvez</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologias del futuro</h3>
                            <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Susan Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para moviles</h3>
                            <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fa fa-user"></i> Harol Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fa fa-user"></i> Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                </div>
                <!--Programa-evento-->
            </div>
            <!--Contenedor-->
        </div>
        <!--contenido-programa-->
    </section>
    <!--Programa-->
    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--sierre sect-fotos-->
    <div class="contador paralax">
        <div class="contador">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero">6</p>Invitados
                </li>
                <li>
                    <p class="numero">15</p>Talleres
                </li>
                <li>
                    <p class="numero">3</p>Dias
                </li>
                <li>
                    <p class="numero">9</p>Conferencias
                </li>
            </ul>
        </div>
    </div>
    <!--siere paralax-->
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
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
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--sierre de Tiket y pases-->
    <div id="mapa" class="mapa">

    </div>
    <!--sierre Mapa-->
    <section class="seccio">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div> <!-- (1)Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--(2)Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--(3)Testimonial-->
        </div>
    </section>
    <!--sierreTestimonial-->
    <div class="newsletter paralax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div><!-- sierre contenido -->
    </div>
    <!--sierre Newsleter-->
    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regreciva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Dias
                </li>
                <li>
                    <p id="horas" class="numero"></p>Horas
                </li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos
                </li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos
                </li>
            </ul>
        </div>
    </section>
 <?php include_once 'includes/templates/footer.php'; ?>