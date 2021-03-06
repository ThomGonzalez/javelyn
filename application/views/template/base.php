<body id="body">
	<!-- preloader -->
	<div id="preloader">
		<img src="<?=base_url('images/preloader.gif')?>" alt="preloader"/>
	</div>
	<!-- end preloader -->

	<!-- Fixed Navigation -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <a class="navbar-brand" href="#body">
					<h1 id="logo">
						<img src="<?=base_url('images/logo.png')?>" alt="ThomGonzalez">
					</h1>
				</a>
            </div>

			<!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Inicio</a></li>
                    <li><a href="#perfil">Perfil</a></li>
                    <li><a href="#tecnologias">Tecnologías</a></li>
                    <li><a href="#trabajos">Portafolio</a></li>
                    <!--<li><a href="#equipo">Equipo</a></li>-->
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
			<!-- /main nav -->				
        </div>
    </header>
    <!-- End Fixed Navigation -->
      
    <!-- Home Slider -->	
	<section id="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		
			<!-- Indicators bullet -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- End Indicators bullet -->				
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active demo" id="slider-background">
					<div class="carousel-caption">
						<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span>Bienvenido</span>!</h2>
						<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/Programador.</span></h3>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">Una herramienta para la conversión de cafeína en código.</p>
						
						<ul class="social-links text-center">
							<li><a href="https://twitter.com/thom_gonzalez"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="https://www.facebook.com/gonzalezthom"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
							<li><a href="https://github.com/ThomGonzalez"><i class="fa fa-github fa-lg"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="item" id="slider-background2">
					<div class="carousel-caption">
						<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/Diseño Web.</span></h3>
						<p data-wow-duration="500ms" class="wow slideInRight animated">No se trata solo de hacer que las cosas se vean bien, sino de hacer lo mejor...</p>
						
						<ul class="social-links text-center">
							<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
							<li><a href="https://github.com/ThomGonzalez"><i class="fa fa-github fa-lg"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="item" id="slider-background3">
					<div class="carousel-caption">
						<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/Source code.</span></h3>
						<p data-wow-duration="500ms" class="wow slideInRight animated">Líneas de texto que son las instrucciones que debe seguir la computadora...</p>
						
						<ul class="social-links text-center">
							<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
							<li><a href="https://github.com/ThomGonzalez"><i class="fa fa-github fa-lg"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Wrapper for slides -->
		</div>
	</section>
	<!-- End Home SliderEnd -->

	<!-- Perfil -->
	<section id="perfil">
		<div class="container">
			<div class="row">
				<div class="sec-title text-center">
					<h2>Perfil</h2>
					<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
				</div>

				<div class="col-lg-2">
					<img class="img-circle" width="140" height="140" alt="Generic placeholder image" src="<?=base_url('images/avatar.jpg')?>">
					<cite title="Source Title">Desarrollador web</cite>
				</div>
				<div class="col-lg-10">
					<h4> <strong>@thom_gonzalez.</strong><br></h4>
					<p class="text-justify">

						Mi nombre es Tomás Santiago González soy programador,
						nací el 16 de Noviembre del 1989 en Hidalgo, México.

						Profesión Ingeniero en Tecnologías de la Información
						estudie en la Universidad Tecnológica de Huasteca Hidalguense
						(UTHH).
					</p><br>

					<p class="text-justify">
						Apacionado por el  area de sistemas, fotografía, arte, pintura entre otros.
					</p><br>
					

					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://thomgonzalez.com/"
					data-text="Sitio web | portafolio" data-via="thom_gonzalez" data-lang="es" data-hashtags="code">Twittear</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Perfil -->

	<!-- Features -->
	<section id="tecnologias" class="features">
		<div class="container">
			<div class="row">
			
				<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
					<h2>Tecnologías</h2>
					<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
				</div>
				
				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-pencil fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Documentación</h3>
							<p>Implementación de metodologías: Análisis, diseño y desarrollo de aplicaciones web.</p>
							<ul>
								<li><a href="#"><span class="label label-default">Modelo en cascada</span></a></li>
								<li><a href="#"><span class="label label-default">MoProSoft.</span></a></li>
								<li><a href="#"><span class="label label-default">Diagrama de Procesos</span></a></li>
								<li><a href="#"><span class="label label-default">Diagrama UML</span></a></li>
								<li><a href="#"><span class="label label-default">Diagrama Entidad Relación</span></a></li>
								<li><a href="#"><span class="label label-default">Pruebas(Testing).</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end service item -->
				
				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-code fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Desarrollo</h3>
							<p>Versionador:</p>
							<ul>
								<li><a href="#"><span class="label label-default">SVN</span></a></li>
								<li><a href="#"><span class="label label-default">GITz</span></a></li>
							</ul>

							<p>Lenguajes de Programación:</p>
							<ul>
								<li><a href="#"><span class="label label-default">Python</span></a></li>
								<li><a href="#"><span class="label label-default">Java</span></a></li>
								<li><a href="#"><span class="label label-default">Php</span></a></li>
								<li><a href="#"><span class="label label-default">C#</span></a></li>
								<li><a href="#"><span class="label label-default">JavaScrip</span></a></li>
							</ul>


							<p>Base de Datos:</p>
							<ul>
								<li><a href="#"><span class="label label-default">MySQL</span></a></li>
								<li><a href="#"><span class="label label-default">Oracle 11g</span></a></li>
								<li><a href="#"><span class="label label-default">SQL Server 2008, 2012</span></a></li>
								<li><a href="#"><span class="label label-default">DB2</span></a></li>
							</ul>

						</div>
					</div>
				</div>
				<!-- end service item -->


				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-desktop fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Framework</h3>
							<ul>
								<li><a href="#"><span class="label label-default">Bootstrap</span></a></li>
								<li><a href="#"><span class="label label-default">PrimeFaces</span></a></li>
								<li><a href="#"><span class="label label-default">Magento</span></a></li>
								<li><a href="#"><span class="label label-default">Codeigniter</span></a></li>
								<li><a href="#"><span class="label label-default">Angular JS</span></a></li>
								<li><a href="#"><span class="label label-default">Django</span></a></li>  
							</ul>
						</div>
					</div>
				</div>
				<!-- end service item -->
					
			</div>
		</div>
	</section>
    <!-- End Features -->

    <!-- Our Works -->
	<section id="trabajos" class="works">
		<div class="container">
			<div class="row">
			
				<div class="sec-title text-center">
					<h2>Portafolio</h2>
					<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
				</div>
				
				<div class="sec-sub-title text-center">
					<p>Imagenes de los trabajos realizados.</p>
				</div>
				
				<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
					<ul class="text-center">
						<li><a href="#" data-filter="*" class="current">Todos</a></li>
						<li><a href="#" data-filter=".branding">Diseño</a></li>
						<li><a href="#" data-filter=".web">Aplicaciones Web</a></li>
						<li><a href="#" data-filter=".photography">Fotografía</a></li>
					</ul>
				</div>
				
			</div>
		</div>
		
		<div class="project-wrapper">
		
			<figure class="work-item branding">
				<img src="<?=base_url('images/works/item-1.png')?>" alt="UI">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="UI" href="<?=base_url('images/works/item-1.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Diseño y Maquetación Web.</h4>
					<p>HTML5</p>
				</figcaption>
			</figure>
			
			<figure class="work-item web">
				<img src="<?=base_url('images/works/item-2.png')?>" alt="SAREK">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="SAREK" href="<?=base_url('images/works/item-2.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Sistema de Administración de Recursos Kabec.</h4>
					<p>SAREK</p>
				</figcaption>
			</figure>
						
			<figure class="work-item photography">
				<img src="<?=base_url('images/works/item-4.png')?>" alt="FOTO">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="FOTO" href="<?=base_url('images/works/item-4.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Exposición National Geographic.</h4>
					<p>Fotografia</p>
				</figcaption>
			</figure>
		
			<figure class="work-item branding">
				<img src="<?=base_url('images/works/item-5.png')?>" alt="LOGO">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="LOGO" href="<?=base_url('images/works/item-5.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Diseño de logo a Grupo LAM</h4>
					<p>LOGO</p>
				</figcaption>
			</figure>
			
			<figure class="work-item web">
				<img src="<?=base_url('images/works/item-6.png')?>" alt="SAPE">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="SAPE" href="<?=base_url('images/works/item-6.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Sistema de Atención Personalizada al Empleado.</h4>
					<p>SAPE</p>
				</figcaption>
			</figure>
			
			<figure class="work-item photography">
				<img src="<?=base_url('images/works/item-3.png')?>" alt="POST">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="Petición POST HTTP" href="<?=base_url('images/works/item-3.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Petición POST HTTP</h4>
					<p>POST</p>
				</figcaption>
			</figure>

			<figure class="work-item web">
				<img src="<?=base_url('images/works/item-7.png')?>" alt="RH">
				<figcaption class="overlay">
					<a class="fancybox" rel="works" title="RH" href="<?=base_url('images/works/item-7.png')?>">
						<i class="fa fa-eye fa-lg"></i>
					</a>
					<h4>Sistema de Recursos Humanos y Nómina.</h4>
					<p>MyCloud</p>
				</figcaption>
			</figure>
			
		</div>
	</section>
	<!-- End Our Works -->

	<!-- Meet Our Team -->				
	<!--<section id="equipo" class="team">
		<div class="container">
			<div class="row">
	
				<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
					<h2>Equipo de trabajo</h2>
					<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
				</div>
				
				<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
					<p>Estos son del equipo de trabajo.</p>
				</div>

				<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
					<div class="member-thumb">
						<img src="<?=base_url('images/team/member-1.png')?>" alt="Team Member" class="img-responsive">
						<figcaption class="overlay">
							<h5>Administrador del sitio web</h5>
							<p>Seguir en:</p>
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
							</ul>
						</figcaption>
					</div>
					<h4>Thom Gonzalez</h4>
					<span>Desarrollador Web</span>
				</figure>
				
				<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<div class="member-thumb">
						<img src="<?=base_url('images/team/user.png')?>" alt="Team Member" class="img-responsive">
						<figcaption class="overlay">
							<h5></h5>
							<p></p>
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
							</ul>
						</figcaption>
					</div>
					<h4></h4>
					<span></span>
				</figure>
				
			</div>
		</div>
	</section>-->
    <!-- End Meet Our Team -->

    <!-- Some fun facts -->		
	<section id="facts" class="facts">
		<div class="parallax-overlay">
			<div class="container">
				<div class="row number-counters">
					
					<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
						<h2>Recursos</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="counters-item">
							<i class="fa fa-html5 fa-3x"></i>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>HTML 5</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="counters-item">
							<i class="fa fa-css3 fa-3x"></i>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>CSS 3</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item">
							<i class="fa fa-git fa-3x"></i>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p> GIT </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="counters-item">
							<i class="fa fa-adn fa-3x"></i>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>ANGULAR JS</p>
						</div>
					</div>
					<!-- end first count item -->
			
				</div>
			</div>
		</div>
	</section>
    <!-- End Some fun facts -->

    <!-- Contact Us -->		
		
		<section id="contacto" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Contacto</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Información del contacto.</p>
					</div>
					
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<p></p>
							<p>Estado de México. México</p>
							<p>(044) 5554307638</p>
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h4>Llena el formulario</h4>
							<form action="<?=base_url("index.php/base/enviar")?>" method="post" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
									</div>
								</div>
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" required>
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Correo electrónico" class="form-control" required>
									</div>
								</div>
								<div class="input-group">
									<textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control" required></textarea>
								</div>
								<div class="input-group">
									<input type="submit" name="submit" id="form-submit" class="pull-right" value="Enviar mensaje">
								</div>
							</form>
						</div>
					</div>
					<!-- end contact form -->
					
					<!-- footer social links -->
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://es.pinterest.com/thomgonzalez/"><i class="fa fa-pinterest fa-2x"></i></a></li>
							<li><a href="https://twitter.com/thom_gonzalez"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://github.com/ThomGonzalez"><i class="fa fa-github fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/gonzalezthom"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					<!-- end footer social links -->
					
				</div>
			</div>
			
			<!-- Google map -->
			<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
			<!-- End Google map -->
			
		</section>
		
        <!-- End Contact Us -->
</body>
