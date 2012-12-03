<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Entity\Translator;
use Acme\SiteBundle\Entity\Translate;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    public function indexAction(Request $request, $lang = 'ru')
    {
		$translate = new Translator($lang);

		$user = new User();
		
		$form = $this->createFormBuilder($user)
			->add('mail', 'text')
			->add('phone', 'text')
			->getForm();

		$repository = $this->getDoctrine()->getRepository('AcmeSiteBundle:Translate');
		$data = $repository->findOneBy(array('part' => 'index'));	
		
		$content = $data->getContent($lang);

		if ($request->getMethod() == 'POST') 
		{
			$form->bindRequest($request);				
			
			if ($form->isValid()) 
			{
				$user->setMail($_POST['form']['mail']);
				$user->setPhone($_POST['form']['phone']);

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
									Телефон
								</td>
								<td>
								".$user->getPhone()."
								</td>
							</tr>
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
				
				return $this->redirect($this->generateUrl('welcome_success'));
			}
		}
		
		$route = $this->getRequest()->attributes->get('_route');
		return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array(
			'form' => $form->createView(),
			'route' => $route,
			'translate' =>$translate, 
			'lang' => $lang,
			'content' => $content,
		));

    }
		
	public function successAction($lang = 'ru')
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
