<?php

	/**
	*
	*/
	class PaginasController extends AppController
	{

		var $name = 'Paginas';

		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$messages_header = array(
				'message-intro' => __('Despega Tú Negocio', true),
				'js-rotating' => __('¿NECESITAS UNA PAGINA WEB?, ¿PERO NO SABES POR DONDE COMENZAR?, AQUI TE AYUDAMOS!, LISTO PARA COMENZAR', true),
				'search_domain' => __('BUSCAR DOMINIO', true)
			);

			$this->set('messages_header', $messages_header);
		}

		function planes_hosting()
		{
			$messages_header = array(
				'message-intro' => __('Planes de Hosting', true),
				'h1' => __('SELECCIONA TU PLAN IDEAL', true)
			);

			$background = 'alt-1';

			$this->set(compact('messages_header', 'background'));
		}

		function reseller_hosting()
		{
			$messages_header = array(
				'message-intro' => __('Planes de Hosting', true),
				'h1' => __('SELECCIONA TU PLAN IDEAL', true),
			);

			$background = 'alt-1';

			$this->set(compact('messages_header', 'background'));
		}

		function servers()
		{
			$messages_header = array(
				'message-intro' => __('Dedicated Servers', true),
				'h1' => __('100% NETWORK AVAILABILITY', true),
			);

			$background = 'alt-2';

			$this->set(compact('messages_header', 'background'));
		}

		function vps()
		{
			$background = 'alt-3';

			$this->set(compact('background'));
		}

		function domains()
		{
			$messages_header = array(
				'message-intro' => __('Registrar Dominio', true),
				'h1' => __('SU DOMINIO .COM POR SOLO $ 11.99', true),
				'h3' => __('Encuentre un dominio, cree su propio sitio web y utilice un email personalizado', true)
			);

			$background = 'alt-4';

			$this->set(compact('messages_header', 'background'));
		}

		function order_slider()
		{
			$background = 'alt-3';

			$this->set(compact('background'));
		}

		function about_us()
		{
			$messages_header = array(
				'message-intro' => __('About Us', true),
				'h1' => __('A MANAGED HOSTING COMPANY', true),
			);

			$background = 'alt-3';

			$this->set(compact('messages_header', 'background'));
		}

		function faq()
		{
			$messages_header = array(
				'message-intro' => __('F.A.Q.', true),
				'h1' => __('¿TIENES PREGUNTAS? ¡NOSOTROS RESPUESTAS!', true),
			);

			$background = 'alt-5';

			$this->set(compact('messages_header', 'background'));

		}

		function support()
		{
			$messages_header = array(
				'message-intro' => __('Support', true),
				'h1' => __('HOW CAN WE HELP?', true),
			);

			$background = 'alt-3';

			$this->set(compact('messages_header', 'background'));
		}

		function login()
		{
			$background = 'login';

			$this->set(compact('background'));
		}

		function testimonials()
		{
			$messages_header = array(
				'message-intro' => __('Testimonials', true),
				'h1' => __('WHAT OUR CLIENTS HAVE TO SAY', true),
			);

			$background = 'alt-2';

			$this->set(compact('messages_header', 'background'));
		}

		function blog()
		{
			$messages_header = array(
				'message-intro' => __('Blog', true),
				'h1' => __('THE LATEST CLOUDME NEWS', true),
			);

			$background = 'alt-2';

			$this->set(compact('messages_header', 'background'));
		}

		function blog_single()
		{
			$messages_header = array(
				'message-intro' => __('Blog', true),
				'h1' => __('ASYMMETRICAL LOCAVORE TOTE BAG', true),
			);

			$background = 'alt-2';

			$this->set(compact('messages_header', 'background'));
		}

		function contact()
		{
			$messages_header = array(
				'message-intro' => __('Contacto', true),
				'h1' => __('ENVIANOS TU MENSAJE', true),
			);

			$background = 'alt-1';

			$this->set(compact('messages_header', 'background'));
		}
	}