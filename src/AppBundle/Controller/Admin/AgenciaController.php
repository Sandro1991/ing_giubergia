<?php

namespace AppBundle\Controller\Admin;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Doctrine\ORM\EntityManager;
/**
 * This is an example of how to use a custom controller for a backend entity.
 */
class AgenciaController extends BaseAdminController
{
    /**
     * This method overrides the default query builder used to search for this
     * entity. This allows to make a more complex search joining related entities.
     */
    protected function createSearchQueryBuilder($entityClass, $searchQuery, array $searchableFields, $sortField = null, $sortDirection = null, $dqlFilter = null)
    {
        /* @var EntityManager */
        $em = $this->getDoctrine()->getManagerForClass($this->entity['class']);
        /* @var DoctrineQueryBuilder */
        $queryBuilder = $em->createQueryBuilder()
            ->select('entity')
            ->from($this->entity['class'], 'entity')
            ->orWhere('LOWER(entity.nombAgen) LIKE :query')
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