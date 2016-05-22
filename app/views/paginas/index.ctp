<!--  FEATURES -->
<section class="features">
    <a id="search_domain"></a>
    <div class="row">
        <div class="small-12 columns">
            <h2><?= __('Registrar Dominio', true) ?></h2>
            <p><?= __('SU DOMINIO .COM POR SOLO $ 14.99', true) ?></p>
            <p><?= __('Encuentre un dominio, cree su propio sitio web y utilice un email personalizado', true) ?></p>
            <!-- DOMAIN NAME SEARCH BOX -->
            <div class="domainsearch">
                <div class="row collapse">
                    <div class="small-12 large-10 medium-10 large-centered medium-centered columns">

                        <form action="http://siryshost.com/whmcs/domainchecker.php" method="post">
                            <div class="row collapse">
                                <div class="small-12 large-8 medium-8 columns">
                                    <input type="hidden" name="direct" value="true" />
                                    <input type="text" name="domain" onfocus="
                                            if (this.value == 'Ingresa tu dominio') {
                                                this.value = '';
                                            }" onblur="if (this.value == '') {
                                                        this.value = 'Ingresa tu dominio';
                                                    }"
                                           accept=""value="Ingresa tu dominio"/>
                                </div>
                                <div class="small-12 large-2 medium-2 columns">
                                    <select name="ext">
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
            <h2><?= __('SELECCIONA TU PLAN DE HOSTING', true) ?></h2>
            <p><?= __('Perfecto para negocios pequeños, organizaciones sin lucro y sitios web personales', true) ?></p>
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
            <p><?= __('Todos los planes incluyen.', true) ?></p>

            <ul class="small-block-grid-1 large-block-grid-3 medium-block-grid-3">

                <li  data-wow-delay="0.2s" class="wow fadeInLeft">
                    <i class="fa fa-database"></i>
                    <h3><?= __('Dominios', true) ?></h3>
                    <p><?= __('Un administrador de dominios que facilita la vida. Es muy simple añadir, actualizar, administrar y transferir todos sus dominios desde un solo lugar.', true) ?></p>
                </li>

                <li data-wow-delay="0.4s" class="wow fadeInLeft">
                    <i class="fa fa-git-square"></i>
                    <h3><?= __('Migración Gratis', true) ?></h3>
                    <p><?= __('Nosotros nos encargamos de todo el proceso de migración desde su servidor actual. Nuestro equipo trabajará duro para garantizar una transferencia sin preocupaciones ni tiempo fuera de línea.', true) ?></p>
                </li>

                <li data-wow-delay="0.6s" class="wow fadeInLeft">
                    <i class="fa fa-code"></i>
                    <h3><?= __('Aplicaciones y Herramientas', true) ?></h3>
                    <p><?= __('Desde Wordpress, Joomla! y Drupal a más de 300 aplicaciones gratuitas de código libre instaladas en un clic. No hay límites para lo que puede lograr.', true) ?></p>
                </li>

                <li data-wow-delay="0.2s" class="wow fadeInRight">
                    <i class="fa fa-bolt"></i>
                    <h3><?= __('Panel de Control', true) ?></h3>
                    <p><?= __('Es muy sencillo administrar sus sitios web, dominios, archivos y más, todo en un solo lugar con el exitoso panel de control cPanel.', true) ?></p>
                </li>

                <li data-wow-delay="0.4s" class="wow fadeInRight">
                    <i class="fa fa-hdd-o"></i>
                    <h3><?= __('FTP & SFTP', true) ?></h3>
                    <p><?= __('Tanto el acceso a FTP como a SFTP están disponibles en todos los planes de web hosting, con el fin de brindarle un acceso simple y seguro a su sitio web.', true) ?></p>
                </li>

                <li data-wow-delay="0.6s" class="wow fadeInRight">
                    <i class="fa fa-rocket"></i>
                    <h3><?= __('Funciones Avanzadas', true) ?></h3>
                    <p><?= __('Funciones avanzadas como acceso a archivos de registro en el servidor y herramientas web para la administración de archivos, bases de datos, correo electrónico y mucho más.', true) ?></p>
                </li>

            </ul>
        </div>
    </div>
</section>
<!--  END OF FEATURES -->