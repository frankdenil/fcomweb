<?php

namespace Fcom\Provider\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;

class ContactController implements ControllerProviderInterface {

	public function connect(Application $app) {

		//@note $app['controllers_factory'] is a factory that returns a new instance of ControllerCollection when used.
		//@see http://silex.sensiolabs.org/doc/organizing_controllers.html
		$controllers = $app['controllers_factory'];

		// Bind sub-routes
		$controllers->get('/', array($this, 'contact'))->bind('contact');

		return $controllers;

	}

	public function contact(Application $app) {

		return $app['twig']->render('contact/contact.twig');
	}

}