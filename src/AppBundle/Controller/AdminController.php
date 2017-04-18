<?php

namespace AppBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends BaseAdminController
{

    public function imprimirAction() {
        $id = $this->request->query->get('id');
        $entity = $this->em->getRepository('AppBundle:Certificado')->find($id);
//        var_dump($idcert);
//        exit();
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('disable-javascript', true);
        $snappy->setOption('no-background', true);
        $snappy->setOption('encoding', 'UTF-8');
        $snappy->setOption('user-style-sheet', 'web/assets/css/print.css');

        $html = $this->renderView(':index:impresion.html.twig', array(
            'cert' => $entity
        ));
        $filename = 'certificado';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="'.$filename.'.pdf"'
            )

        );
//
    }

}

?>