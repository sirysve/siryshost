<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
//	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'paginas', 'action' => 'index'));
	Router::connect('/planes_hosting', array('controller' => 'paginas', 'action' => 'planes_hosting'));
	Router::connect('/reseller_hosting', array('controller' => 'paginas', 'action' => 'reseller_hosting'));
	Router::connect('/servers', array('controller' => 'paginas', 'action' => 'servers'));
	Router::connect('/vps', array('controller' => 'paginas', 'action' => 'vps'));
	Router::connect('/domains', array('controller' => 'paginas', 'action' => 'domains'));
	Router::connect('/order_slider', array('controller' => 'paginas', 'action' => 'order_slider'));
	Router::connect('/about_us', array('controller' => 'paginas', 'action' => 'about_us'));
	Router::connect('/faq', array('controller' => 'paginas', 'action' => 'faq'));
	Router::connect('/support', array('controller' => 'paginas', 'action' => 'support'));
	Router::connect('/login', array('controller' => 'paginas', 'action' => 'login'));
	Router::connect('/testimonials', array('controller' => 'paginas', 'action' => 'testimonials'));
	Router::connect('/blog', array('controller' => 'paginas', 'action' => 'blog'));
	Router::connect('/blog_single', array('controller' => 'paginas', 'action' => 'blog_single'));
	Router::connect('/contact', array('controller' => 'paginas', 'action' => 'contact'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
