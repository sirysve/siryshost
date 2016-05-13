<!doctype html>
<html class="no-js" lang="es">
	<head>
		<?php echo $this->Html->charset(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?= __('Tú negocio en la web!', true) ?></title>
		<link rel="shortcut icon" href="img/icons/favicon.png" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<?php
			echo $this->Html->css('foundation');
			echo $this->Html->css('font-awesome.min');
			echo $this->Html->css('animate.min');
			echo $this->Html->css('morphext');
			echo $this->Html->css('owl.carousel');
			echo $this->Html->css('owl.theme');
			echo $this->Html->css('owl.transitions');
			echo $this->Html->css('slicknav');
			echo $this->Html->css('style');
			echo $this->Html->css('custom');
		?>
	</head>

	<?php if(isset($background) && $background === 'login') : ?>
		<body class="login-page" data-whatinput="mouse">
	<?php else : ?>
		<body>
	<?php endif; ?>

		<!--  HEADER -->
		<?php if (!isset($background)) : ?>
			<header>
		<?php else : ?>
			<header class="<?= $background ?>">
		<?php endif; ?>
			<div class="top">
				<div class="row">
					<div class="small-12 large-3 medium-3 columns">
						<div class="logo">
							<a href="inicio" title=""><img src="img/logo.png" alt="" title=""/></a>
						</div>
					</div>

					<div class="small-12 large-9 medium-9 columns">

						<!--  NAVIGATION MENU AREA -->
						<?php echo $this->element('navbar'); ?>
						<!--  END OF NAVIGATION MENU AREA -->

					</div>
				</div>
			</div>

			<?php if ($this->action !== 'vps'): ?>
				<!--  MESSAGES ABOVE HEADER IMAGE -->
				<div class="message">
					<div class="row">
						<div class="small-12 columns">
							<?php if (isset($messages_header['message-intro'])) : ?>
								<div class="message-intro">
									<span class="message-line"></span>
									<p><?= $messages_header['message-intro'] ?></p>
									<span class="message-line"></span>
								</div>
							<?php endif; ?>
							<?php if (isset($messages_header['js-rotating'])) : ?>
								<h1><span id="js-rotating"><?= $messages_header['js-rotating'] ?></span></h1>
							<?php endif; ?>
							<?php if (isset($messages_header['h1'])) : ?>
								<h1><?= $messages_header['h1'] ?></h1>
							<?php endif; ?>
							<?php if (isset($messages_header['h3'])) : ?>
								<h3><?= $messages_header['h3'] ?></h3>
							<?php endif; ?>
							<?php if (isset($messages_header['pricingboxes'])) : ?>
								<a href="#pricingboxes" class="small radius button"><?= $messages_header['pricingboxes'] ?></a>
							<?php endif; ?>
							<?php if ($this->action === 'domains'): ?>
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
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!--  END OF MESSAGES ABOVE HEADER IMAGE -->
			<?php endif; ?>

			<?php if ($this->action === 'vps' || $this->action === 'order_slider'): ?>
				<!--  SLIDER ORDER -->
				<div class="pricing-order-slider">
					<div class="row">
						<div class="small-12 columns">
							<h1><?= __('SSD CLOUD VPS HOSTING. CHOOSE NOW.', true) ?></h1>
							<div class="vps-prices-container">
								<div class="vps-prices-panel">
									<div class="vps-prices-drag">
										<div id="vps-slider"></div>
										<div id="sliderlines"></div>
									</div>

									<div class="row">
										<div class="small-12 columns">

											<div id="vps_name_option"><h3><span class="how_much"></span></h3></div>

											<ul class="small-block-grid-2 medium-block-grid-4">

												<li>
													<div class="centralized"><div id="cpu_option"><h6><?= __('CPU', true) ?></h6><span class="how_much"></span></div></div>
												</li>

												<li>
													<div class="centralized"><div id="memory_option"><h6><?= __('RAM', true) ?></h6><span class="how_much"></span></div></div>
												</li>

												<li>
													<div class="centralized"><div id="disk_space_option"><h6><?= __('Disk Space', true) ?></h6><span class="how_much"></span></div></div>
												</li>

												<li>
													<div class="centralized"><div id="bandwidth_option"><h6><?= __('Bandwidth', true) ?></h6><span class="how_much"></span></div></div>
												</li>

											</ul>

											<div class="total_amount">
												<div>
													<ul class="dropdown menu" data-dropdown-menu>
														<li class="is-dropdown-submenu-parent opens-right">
															<a href="#" class="dropdown-value">
																<h3><span><?= __('$', true) ?></span><span id="price_amount">0</span><span id="decimal">.00</span></h3>
															</a>
															<ul class="menu submenu is-dropdown-submenu first-sub vertical precio-total-submenu">
																<li class="is-submenu-item is-dropdown-submenu-item">
																	<a href="#"><?= __('Item 1', true) ?></a>
																</li>
																<li class="is-submenu-item is-dropdown-submenu-item">
																	<a href="#"><?= __('Item 2', true) ?></a>
																</li>
																<li class="is-submenu-item is-dropdown-submenu-item">
																	<a href="#"><?= __('Item 3', true) ?></a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
											<p class="text-center"><a class="button medium order-vps" href="#"><?= __('ORDENAR', true) ?></a></p>

										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
				<!--  END OF SLIDER ORDER -->
			<?php endif; ?>

			</header>
			<!--  END OF HEADER -->

			<!--  CONTENT  -->
			<?php echo $content_for_layout ?>
			<!--  END OF CONTENT  -->

			<!--  FOOTER  -->
			<footer>
				<div class="row">
					<div class="small-12 columns">
						<div class="contacts">
							<div class="row">
								<div class="small-12 large-3 medium-3 columns">
									<i class="fa fa-map-marker"></i>
									<?= __('Colombia, Ecuador y Venezuela', true) ?>
								</div>
								<div class="small-12 large-3 medium-3 columns">
									<i class="fa fa-mobile"></i>
									<?= __('SIRYSHOST', true) ?>
								</div>
								<div class="small-12 large-3 medium-3 columns">
									<a href="#"><i class="fa fa-comments"></i></a>
									<?= __('CHAT ONLINE', true) ?>
								</div>
								<div class="small-12 large-3 medium-3 columns">
									<a href="#"><i class="fa fa-envelope-o"></i></a>
									<?= __('CONTACTANOS', true) ?>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="small-12 columns">
						<div class="footerlinks">
							<div class="small-12 large-3 medium-3 columns border-right">
								<h2><?= __('Servicios de Hosting', true) ?></h2>
								<ul>
									<li><a href="#"><?= __('Planes Hosting', true) ?></a></li>
									<li><a href="v#"><?= __('Managed VPS', true) ?></a></li>
									<li><a href="#"><?= __('Dedicated Services', true) ?></a></li>
									<li><a href="#"><?= __('Únete al Plan Reseller', true) ?></a></li>
									<li><a href="#"><?= __('Ofertas especiales', true) ?></a></li>
								</ul>
							</div>

							<div class="small-12 large-3 medium-3 columns border-right">
								<h2><?= __('Empresa', true) ?></h2>
								<ul>
									<li><a href="#"><?= __('Nosotros', true) ?></a></li>
									<li><a href="#"><?= __('Nuestro Blog', true) ?></a></li>
									<li><a href="#"><?= __('Terminos de Servicios', true) ?></a></li>
									<li><a href="#"><?= __('Políticas', true) ?></a></li>
									<li><a href="#"><?= __('Afiliados', true) ?></a></li>
								</ul>
							</div>

							<div class="small-12 large-3 medium-3 columns border-right">
								<h2><?= __('Servicios', true) ?></h2>
								<ul>
									<li><a href="#"><?= __('Certificados SSL', true) ?></a></li>
									<li><a href="#"><?= __('IPs Dedicadas', true) ?></a></li>
									<li><a href="#"><?= __('Desarrollo Web', true) ?></a></li>
									<li><a href="#"><?= __('Landing Page', true) ?></a></li>
									<li><a href="#"><?= __('Software', true) ?></a></li>
								</ul>
							</div>

							<div class="small-12 large-3 medium-3 columns">
								<p><?= __('Inscríbete para obtener ofertas especiales:', true) ?></p>

								<!-- Begin MailChimp Signup Form -->
								<div id="mc_embed_signup">
									<form action="//audemedia.us7.list-manage.com/subscribe/post?u=b5638e105dac814ad84960d90&amp;id=9345afa0aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

										<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="correo electrónico" required>
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;"><input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value=""></div>
										<div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									</form>
								</div>
							</div>
							<!--End mc_embed_signup-->
						</div>

					</div>
				</div>

				<!--SOCIAL LINKS -->
				<div class="social">
					<div class="row">
						<div class="small-12 columns">
							<ul class="small-block-grid-1 large-block-grid-5 medium-block-grid-5">
								<li class="facebook"><a href="https://www.facebook.com/siryshost" target="_blank"><?= __('FACEBOOK', true) ?></a></li>
								<li class="twitter"><a href="https://twitter.com/siryshost" target="_blank"><?= __('TWITTER', true) ?></a></li>
								<li class="linkedin"><a href="#"><?= __('LINKEDIN', true) ?></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END OF SOCIAL LINKS -->
				<p class="copyright"><?= __('© Copyright SIRYSHOST, all rights reserved.', true) ?></p>
			</footer>
			<!--  END OF FOOTER  -->

			<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

			<?php
				echo $this->Html->script('vendor/jquery');
				echo $this->Html->script('vendor/what-input.min');
				echo $this->Html->script('foundation.min');
				echo $this->Html->script('vendor/hoverIntent');
				echo $this->Html->script('vendor/superfish.min');
				echo $this->Html->script('vendor/morphext.min');
				echo $this->Html->script('vendor/wow.min');
				echo $this->Html->script('vendor/jquery.slicknav.min');
				echo $this->Html->script('vendor/waypoints.min');
				echo $this->Html->script('vendor/jquery.animateNumber.min');
				echo $this->Html->script('vendor/owl.carousel.min');
				echo $this->Html->script('vendor/jquery-ui.min');
				echo $this->Html->script('vendor/retina.min');
				echo $this->Html->script('custom');

				if ($this->action === 'vps'  || $this->action === 'order_slider')
				{
					echo $this->Html->script('order_slider');
				}

				echo $this->Html->script('tawk.to');
			?>

	</body>
</html>