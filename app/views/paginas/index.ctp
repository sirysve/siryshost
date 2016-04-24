<!--  FEATURES -->
<section class="features">
	<div class="row">
		<div class="small-12 columns">
			<h2><?= __('Registrar Dominio', true) ?></h2>
			<p><?= __('SU DOMINIO .COM POR SOLO $ 11.99', true) ?></p>
			<p><?= __('Encuentre un dominio, cree su propio sitio web y utilice un email personalizado', true) ?></p>
			<!-- DOMAIN NAME SEARCH BOX -->
				<div class="domainsearch">
					<div class="row collapse">
						<div class="small-12 large-10 medium-10 large-centered medium-centered columns">

							<form method="post">
								<div class="row collapse">
									<div class="small-12 large-8 medium-8 columns">
										<input type="text" name="sld" onfocus="
											if (this.value == 'Ingresa tu dominio') {
												this.value = '';
											}" onblur="if (this.value == '') {
												this.value = 'Ingresa tu dominio';
											}"
										accept=""value="Ingresa tu dominio"/>
									</div>
									<div class="small-12 large-2 medium-2 columns">
										<select name="tld">
											<option>.com</option>
											<option>.net</option>
											<option>.org</option>
											<option>.info</option>
										</select>
									</div>
									<div class="small-12 large-2 medium-2 columns">
										<input class="btn-wide" type="submit" value="Buscar" name="submit">
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			<!-- END OF DOMAIN NAME SEARCH BOX -->
		</div>
	</div>
</section>
<!--  END OF FEATURES -->

<!--  PRICING BOXES  -->
<div class="pricingboxes">
	<a id="pricingboxes"></a>
	<div class="row">
		<div class="small-12 columns">
			<h2><?= __('ENCUENTRA EL PLAN IDEAL PARA TI', true) ?></h2>
			<p><?= __('Al adquirir cualquiera de nuestros planes de hosting obtendras los siguientes beneficios: Cpanel Propio, catálogo de aplicaciones (Softaculous), Soporte Online y mucho más.', true) ?></p>
		</div>
	</div>

	<div class="spacing-30"></div>

	<div class="row">
		<div data-wow-delay="0.2s"  class="small-12 large-4 medium-4 columns wow zoomIn">
			<div class="title"><?= __('EMPRENDEDOR', true) ?></div>
			<ul class="pricing-table">
				<li class="bullet-item"><?= __('2Gb de espacion en disco', true) ?></li>
				<li class="bullet-item"><?= __('10GB de transferencia', true) ?></li>
				<li class="bullet-item"><?= __('1 dominio adicional', true) ?></li>
				<li class="bullet-item"><?= __('99,99% Online', true) ?></li>
				<li class="bullet-item"><?= __('2 cuentas de correo', true) ?></li>
				<li class="bullet-item"><?= __('1 subdominio', true) ?></li>
				<li class="bullet-item"><?= __('2 Cuentas FTP', true) ?></li>
				<li class="bullet-item"><?= __('1 Base de datos', true) ?></li>
				<li class="price"><span><?= __('$19.99', true) ?></span><?= __('Anual', true) ?></li>
				<li class="cta-button"><p><span><a href=""><?= __('Comprar', true) ?></a></span></p></li>
			</ul>
		</div>

		<div data-wow-delay="0.4s"  class="small-12 large-4 medium-4 columns wow zoomIn">
			<div class="title"><?= __('PYME', true) ?></div>
			<ul class="pricing-table">
				<li class="bullet-item"><?= __('5Gb de espacion en disco', true) ?></li>
				<li class="bullet-item"><?= __('20GB de transferencia', true) ?></li>
				<li class="bullet-item"><?= __('5 dominio adicional', true) ?></li>
				<li class="bullet-item"><?= __('99,99% Online', true) ?></li>
				<li class="bullet-item"><?= __('12 cuentas de correo', true) ?></li>
				<li class="bullet-item"><?= __('5 subdominios', true) ?></li>
				<li class="bullet-item"><?= __('5 Cuentas FTP', true) ?></li>
				<li class="bullet-item"><?= __('5 Base de datos', true) ?></li>
				<li class="price"><span><?= __('$39.99', true) ?></span><?= __('Anual', true) ?></li>
				<li class="cta-button"><p><span><a href=""><?= __('RECOMENDADO', true) ?></a></span></p></li>
			</ul>
		</div>

		<div data-wow-delay="0.6s"  class="small-12 large-4 medium-4 columns wow zoomIn">
			<div class="title"><?= __('CORPORATIVO', true) ?></div>
			<ul class="pricing-table">
				<li class="bullet-item"><?= __('10Gb de espacio en disco', true) ?></li>
				<li class="bullet-item"><?= __('30GB de transferencia', true) ?></li>
				<li class="bullet-item"><?= __('10 dominio adicional', true) ?></li>
				<li class="bullet-item"><?= __('99,99% Online', true) ?></li>
				<li class="bullet-item"><?= __('cuentas de correo ilimitadas', true) ?></li>
				<li class="bullet-item"><?= __('10 subdominios', true) ?></li>
				<li class="bullet-item"><?= __('10 Cuentas FTP', true) ?></li>
				<li class="bullet-item"><?= __('Base de datos ilimitadas', true) ?></li>
				<li class="price"><span><?= __('$69.99', true) ?></span><?= __('Anual', true) ?></li>
				<li class="cta-button"><p><span><a href=""><?= __('Comprar', true) ?></a></span></p></li>
			</ul>
		</div>

	</div>
</div>
<!--  END OF PRCING BOXES  -->

<!--  FEATURES -->
<section class="features">
	<div class="row">
		<div class="small-12 columns">
			<h2><?= __('RAZONES PARA ELEGIRNOS', true) ?></h2>
			<p><?= __('Al seleccionar cualquiera de nuestros planes de hosting obtendrás los mejores beneficios y carcterísticas del mercado.', true) ?></p>

			<ul class="small-block-grid-1 large-block-grid-3 medium-block-grid-3">

				<li  data-wow-delay="0.2s" class="wow fadeInLeft">
					<i class="fa fa-database"></i>
					<h3><?= __('Hosting', true) ?></h3>
					<p><?= __('Activación inmediata, Sin caídas, 99.99% Online', true) ?></p>
				</li>

				<li data-wow-delay="0.4s" class="wow fadeInLeft">
					<i class="fa fa-git-square"></i>
					<h3><?= __('Cpanel', true) ?></h3>
					<p><?= __('Fácil de usar, Estadísticas al instante.', true) ?></p>
				</li>

				<li data-wow-delay="0.6s" class="wow fadeInLeft">
					<i class="fa fa-code"></i>
					<h3><?= __('Base de datos', true) ?></h3>
					<p><?= __('Bases de datos MySQL.', true) ?></p>
				</li>

				<li data-wow-delay="0.2s" class="wow fadeInRight">
					<i class="fa fa-bolt"></i>
					<h3><?= __('Ideal para Desarrolladores', true) ?></h3>
					<p><?= __('Lenguajes de programación ideales: CGI, Fast CGI, PHP 5, Ruby on Rails, Perl, Python, SSL.', true) ?></p>
				</li>

				<li data-wow-delay="0.4s" class="wow fadeInRight">
					<i class="fa fa-hdd-o"></i>
					<h3><?= __('Aplicaciones Gratuitas', true) ?></h3>
					<p><?= __('Tienes más de 125 aplicaciones disponibles: CMS, e-Commerce, Blog, Surveys y muchos más.', true) ?></p>
				</li>

				<li data-wow-delay="0.6s" class="wow fadeInRight">
					<i class="fa fa-rocket"></i>
					<h3><?= __('Correo electrónico', true) ?></h3>
					<p><?= __('Contarás con cuentas de correo electrónico para darle una mejor imagen a tu negocio.', true) ?></p>
				</li>

			</ul>
		</div>
	</div>
</section>
<!--  END OF FEATURES -->