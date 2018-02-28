<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    public function getProducts($page, $nbPerPage)
    {
        $qb = $this->createQueryBuilder('product');
        $qb
            ->select('product')
            ->getQuery()
        ;

        $qb
        ->setFirstResult(($page-1) * $nbPerPage)
        ->setMaxResults($nbPerPage)
;
        return new Paginator($qb, true);
    }
}
