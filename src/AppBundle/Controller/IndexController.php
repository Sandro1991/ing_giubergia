<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Reloj;
use AppBundle\Form\ContactType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {

        $form = $this->createForm(ContactType::class);

//        if ($query->isMethod('POST')) {
//            $form->handleRequest($query);

        if ($form->isSubmitted() && $form->isValid()) {
            $message = \Swift_Message::newInstance();
            $message->setSubject($form->get('motivo')->getData());
            $message->setFrom($form->get('email')->getData());
            $message->setTo('sandronicolasm@gmail.com');
            $message->setBody($form->get('mensaje')->getData());

            $this->get('mailer')->send($message);

//            $query->getSession()->getFlashBag()->add('success', 'Tu email ha sido enviado. Gracias');
//
//            return $this->redirect($this->generateUrl('contact_blog'));
        }

        // replace this example code with whatever you need
        return $this->render(':index:index.html.twig', array(
            'form'=> $form->createView()
        ));
    }



}
