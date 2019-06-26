<?php

namespace App\Repository;

use App\Entity\FastHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FastHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method FastHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method FastHistory[]    findAll()
 * @method FastHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FastHistoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FastHistory::class);
    }

    // /**
    //  * @return FastHistory[] Returns an array of FastHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FastHistory
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
