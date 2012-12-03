<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\SignUp;
use Acme\DemoBundle\Entity\User;
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

		$sign = new SignUp();
		
		$form = $this->createFormBuilder($sign)
			->add('mail', 'text')
			->add('phone', 'text')
			->getForm();

		if ($request->getMethod() == 'POST') 
		{
			$form->bindRequest($request);	
			
			
			//if ($form->isValid()) 
			{
				$user = new User();
				//echo '<pre>'; print_r($_POST['form']['mail']); echo '</pre>';exit;
				$user->setMail($_POST['form']['mail']);
				$user->setPhone($_POST['form']['phone']);
				
				//добавили в базу
				//$em = $this->getDoctrine()->getEntityManager();
				//$em->persist($user);
				//$em->flush();
				
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
				
			//echo '<pre>'; print_r($message); echo '</pre>';exit;
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
		$route = $this->getRequest()->attributes->get('_route');
		return $this->render('AcmeDemoBundle:Welcome:success.html.twig', array('route' => $route));
    }
}
