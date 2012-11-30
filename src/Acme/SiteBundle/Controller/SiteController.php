<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeSiteBundle:Site:index.html.twig');
    } 
	
	public function companyAction()
    {
        $route = $this->getRequest()->attributes->get('_route');
		return $this->render('AcmeSiteBundle:Site:company.html.twig', array('route' => $route));
    }
	
	public function contactsAction()
    {
        $route = $this->getRequest()->attributes->get('_route');
		return $this->render('AcmeSiteBundle:Site:contacts.html.twig', array('route' => $route));
    }
}