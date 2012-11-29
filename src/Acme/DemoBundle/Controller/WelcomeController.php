<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\SignUp;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    public function indexAction(Request $request)
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

		$user = new SignUp();
		
		$form = $this->createFormBuilder($user)
			->add('mail', 'text')
			->add('phone', 'text')
			->getForm();

		if ($request->getMethod() == 'POST') 
		{
			$form->bindRequest($request);			
			if ($form->isValid()) 
			{
				return $this->redirect($this->generateUrl('welcome_success'));
			}
		}
		
		$route = $this->getRequest()->attributes->get('_route');
		return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array(
			'form' => $form->createView(),
			'route' => $route,
		));

    }
		
	public function successAction()
    {
		 return $this->render('AcmeDemoBundle:Welcome:success.html.twig');
    }
}
