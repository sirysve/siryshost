<nav class="desktop-menu">
    <ul class="sf-menu" id="navigation">
        <li class="<?= ($this->action === 'index') ? 'current-menu-item' : '' ?>"><?= $this->Html->link(__('INICIO', true), array('controller' => 'paginas', 'action' => 'index')) ?></li>
        <li class="<?= ($this->action === 'planes_hosting' || $this->action === 'reseller_hosting' || $this->action === 'servers' || $this->action === 'vps') ? 'current-menu-item' : ''?>" ><a href="#"><?= __('HOSTING', true) ?></a>
            <ul>
                <li><a href="planes_hosting"><?= __('PLANES DE HOSTING', true) ?></a></li>
                <li><a href="reseller_hosting"><?= __('RESELLER HOSTING', true) ?></a></li>
                <li><a href="servers"><?= __('SERVIDOR DEDICADO', true) ?></a></li>
                <li><a href="vps"><?= __('VPS', true) ?></a></li>
            </ul>
        </li>
        <li class="<?= ($this->action === 'domains') ? 'current-menu-item' : '' ?>" ><a href="domains"><?= __('DOMINIOS', true) ?></a></li>
        <li><a href="#"><?= __('SERVICIOS', true) ?></a></li>
        <li class="<?= ($this->action === 'faq') ? 'current-menu-item' : '' ?>" ><a href="faq"><?= __('F.A.Q.', true) ?></a></li>
        <li class="<?= ($this->action === 'contact') ? 'current-menu-item' : '' ?>" ><a href="contact"><?= __('CONTACTO', true) ?></a></li>
        <li class="<?= ($this->action === 'login') ? 'current-menu-item' : '' ?>" accesskey=""><a href="login"><?= __('INICIAR SESION', true) ?></a></li>
    </ul>
</nav>