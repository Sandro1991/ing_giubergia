<?php

namespace AppBundle\Controller\Admin;
use AppBundle\Entity\Certificado;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
/**
 * This is an example of how to use a custom controller for a backend entity.
 */
class CertificadoController extends BaseAdminController
{
//    public function imprimirnewAction()
//    {
//
//        $snappy = $this->get('knp_snappy.pdf');
//        $snappy->setOption('no-background', true);
//        $snappy->setOption('encoding', 'UTF-8');
//        $snappy->setOption('user-style-sheet', '../web/assets/css/print.css');
//
//
//        $cert = new Certificado();
//        $em = $this->getDoctrine()->getManager();
//        if ($cert->isSubmitted() && $cert->isValid()) {
//            $em->persist($cert);
//            $em->flush($cert);
//
//            $html = $this->renderView(':index:impresion.html.twig', array(
//                'cert' => $cert
//            ));
//            $filename = 'certificado';
//
//            return new Response(
//                $snappy->getOutputFromHtml($html),
//                200,
//                array(
//                    'Content-Type' => 'application/pdf',
//                    'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
//                )
//
//            );
//        }
//    }
    
    public function imprimirAction()
    {
        $id = $this->request->query->get('id');
        $entity = $this->em->getRepository('AppBundle:Certificado')->find($id);
        $entity2 = $this->em->getRepository('AppBundle:Titular')->find(1);
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-background', true);
        $snappy->setOption('encoding', 'UTF-8');
        $snappy->setOption('user-style-sheet', '../web/assets/css/print.css');

        $html = $this->renderView(':index:impresion.html.twig', array(
            'cert' => $entity,
            'titu' => $entity2
        ));
        $filename = 'certificado';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
            )

        );
    }
    protected function createSearchQueryBuilder($entityClass, $searchQuery, array $searchableFields, $sortField = null, $sortDirection = null, $dqlFilter = null)
    {
        /* @var EntityManager */
        $em = $this->getDoctrine()->getManagerForClass($this->entity['class']);
        /* @var DoctrineQueryBuilder */
        $queryBuilder = $em->createQueryBuilder()
            ->select('entity')
            ->from($this->entity['class'], 'entity')
            ->join('entity.idPermi', 'permisionario')
            ->join('entity.idReloj', 'reloj')
            ->join('entity.idAuto', 'auto')
            ->join('entity.idAgen', 'agencia')
            ->join('entity.idChapa', 'chapa')
            ->join('entity.idMonto', 'monto')
            ->orWhere('LOWER(permisionario.nombPermi) LIKE :query')
            ->orWhere('LOWER(reloj.nombReloj) LIKE :query')
            ->orWhere('LOWER(auto.domiAuto) LIKE :query')
            ->orWhere('LOWER(agencia.nombAgen) LIKE :query')
            ->orWhere('LOWER(chapa.nombChapa) LIKE :query')
            ->orWhere('LOWER(monto.nombMonto) LIKE :query')
            ->orWhere('LOWER(entity.numeChapa) LIKE :query')
            ->orWhere('LOWER(entity.numePrec) LIKE :query')
            ->orWhere('LOWER(entity.numeReloj) LIKE :query')
            ->setParameter('query', '%'.strtolower($searchQuery).'%')
        ;
        if (!empty($dqlFilter)) {
            $queryBuilder->andWhere($dqlFilter);
        }
        if (null !== $sortField) {
            $queryBuilder->orderBy('entity.'.$sortField, $sortDirection ?: 'DESC');
        }
        return $queryBuilder;
    }


}