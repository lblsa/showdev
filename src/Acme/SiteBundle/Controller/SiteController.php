<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Translator;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends Controller
{
    public function indexAction($lang = 'ru')
    {
        $route = $this->getRequest()->attributes->get('_route');
		$translate = new Translator($lang);
		
		return $this->render('AcmeSiteBundle:Site:index.html.twig', array(
			'route' => $route, 
			'translate' => $translate,
			'lang' => $lang,
		));
    } 
	
	public function companyAction($lang = 'ru')
    {
        $route = $this->getRequest()->attributes->get('_route');
		$translate = new Translator($lang);
		
		return $this->render('AcmeSiteBundle:Site:company.html.twig', array(
			'route' => $route, 
			'translate' => $translate,
			'lang' => $lang,
		));
    }
	
	public function contactsAction($lang = 'ru')
    {
        $route = $this->getRequest()->attributes->get('_route');
		$translate = new Translator($lang);
		
		return $this->render('AcmeSiteBundle:Site:contacts.html.twig', array(
			'route' => $route, 
			'translate' => $translate,
			'lang' => $lang,
		));
    }
}