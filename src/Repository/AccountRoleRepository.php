<?php

namespace App\Repository;

use App\Entity\AccountRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AccountRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountRole[]    findAll()
 * @method AccountRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountRoleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AccountRole::class);
    }

    // /**
    //  * @return AccountRole[] Returns an array of AccountRole objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccountRole
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
