<?php

namespace AppBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    public function getPosts($first_result, $query, $max_results = 20)
    {
    $qb = $this->createQueryBuilder('material');
    $qb
        ->select('material')
        ->setFirstResult(($page-1) * $nbPerPage)
        ->setMaxResults($nbPerPage)
    ;
    return new Paginator($qb);
    }
}
