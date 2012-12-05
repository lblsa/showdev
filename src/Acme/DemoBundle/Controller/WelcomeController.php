<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Entity\Translator;
use Acme\SiteBundle\Entity\Translate;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    public function indexAction(Request $request, $lang)
    {
		$translate = new Translator($lang);

		$user = new User();
		$user->setMail('name@email.com');
		
		$form = $this->createFormBuilder($user)
			->add('mail', 'text')
			->getForm();
				
		$repository = $this->getDoctrine()->getRepository('AcmeSiteBundle:Translate');
		$data = $repository->findOneBy(array('part' => 'index'));	
		
		$content = $data->getContent($lang);
		$route = $this->getRequest()->attributes->get('_route');
		
		$mes = '';
		if ($request->getMethod() == 'POST') 
		{
			$form->bindRequest($request);	
			
			$mail = $_POST['form']['mail'];
			$repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:User');			
			$data = $repository->findOneBy(array('mail' => $mail));	
			if($data) $mes = 1;
			if($mail=='name@email.com') $mes = 2;

			if($mes==='')
			{
				if ($form->isValid()) 
				{
					$user->setMail($_POST['form']['mail']);

					//добавили в базу
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($user);
					$em->flush();
					
					//отправляем уведомление на почту
					$to= "roman.efimushkin@gmail.com" . ", "."vladimir.stasevich@gmail.com";
					$subject = "Зарегистрирован новый пользователь";
					$message = "
					<html>
						<head>
						 <title>Зарегистрирован новый пользователь на showdev.ru</title>
						</head>
						<body>
							<h1>Зарегистрирован новый пользователь на showdev.ru</h1>
							<table>
								<tr>
									<td style='font-weight: bold'>
										E-mail
									</td>
									<td>
									".$user->getMail()."
									</td>
								</tr>
							</table>
						</body>
					</html>
					";

					$headers= "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
					
					mail($to, $subject, $message, $headers);

					return $this->redirect($this->generateUrl('welcome_success', array('lang'=>$lang)));
				}
			}
		}
		
		
		return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array(
			'form' => $form->createView(),
			'route' => $route,
			'translate' =>$translate, 
			'lang' => $lang,
			'content' => $content,
			'mes' => $mes,
		));

    }
		
	public function successAction($lang)
    {
		$route = $this->getRequest()->attributes->get('_route');
		$translate = new Translator($lang);
		
		return $this->render('AcmeDemoBundle:Welcome:success.html.twig', array(
			'route' => $route, 
			'translate' =>$translate,
			'lang' => $lang,			
		));
    }
}
