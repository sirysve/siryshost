<nav class="desktop-menu">
	<ul class="sf-menu" id="navigation">
		<li class="current-menu-item"><?= $this->Html->link(__('INICIO', true), array('controller' => 'paginas', 'action' => 'index')) ?></li>
		<li><a href="#"><?= __('HOSTING', true) ?></a>
			<ul>
				<li><a href="planes_hosting"><?= __('PLANES DE HOSTING', true) ?></a></li>
				<li><a href="reseller_hosting"><?= __('RESELLER HOSTING', true) ?></a></li>
				<li><a href="servers"><?= __('SERVIDOR DEDICADO', true) ?></a></li>
				<li><a href="vps"><?= __('VPS', true) ?></a></li>
			</ul>
		</li>
		<li><a href="domains"><?= __('DOMINIOS', true) ?></a></li>
		<li><a href="#"><?= __('PAGES', true) ?></a>
			<ul>
				<li><a href="order_slider"><?= __('ORDER SLIDER', true) ?></a></li>
				<li><a href="about_us"><?= __('ABOUT US', true) ?></a></li>
				<li><a href="faq"><?= __('FAQ', true) ?></a></li>
<!--				<li><a href="datacenter.html"><?= __('DATACENTERS', true) ?></a></li>-->
				<li><a href="support"><?= __('SUPPORT', true) ?></a></li>
				<li><a href="login"><?= __('LOGIN', true) ?></a></li>
				<li><a href="testimonials"><?= __('TESTIMONIALS', true) ?></a></li>
<!--				<li><a href="typography.html"><?= __('TYPOGRAPHY', true) ?></a></li>-->
<!--				<li><a href="index-sticky-top.html"><?= __('STICKY HEADER', true) ?></a></li>-->
			</ul>
		</li>
		<li><a href="#"><?= __('BLOG', true) ?></a>
			<ul>
				<li><a href="blog"><?= __('CATEGORY', true) ?></a></li>
				<li><a href="blog_single"><?= __('SINGLE POST', true) ?></a></li>
			</ul>
		</li>
		<li><a href="contact"><?= __('CONTACTO', true) ?></a></li>
	</ul>
</nav>