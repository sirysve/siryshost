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
		<li><a href="#"><?= __('SERVICIOS', true) ?></a></li>
		<li><a href="#"><?= __('F.A.Q.', true) ?></a></li>
		<li><a href="contact"><?= __('CONTACTO', true) ?></a></li>
		<li><a href="#"><?= __('INICIAR SESION', true) ?></a></li>
	</ul>
</nav>