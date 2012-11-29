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
        return $this->render('AcmeSiteBundle:Site:company.html.twig');
    }
	
	public function contactsAction()
    {
        return $this->render('AcmeSiteBundle:Site:contacts.html.twig');
    }
}