<?php

namespace App\Repository;

use App\Entity\RoleWidget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RoleWidget|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleWidget|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleWidget[]    findAll()
 * @method RoleWidget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleWidgetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoleWidget::class);
    }

    // /**
    //  * @return RoleWidget[] Returns an array of RoleWidget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoleWidget
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
