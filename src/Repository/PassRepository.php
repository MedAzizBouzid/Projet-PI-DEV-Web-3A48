<?php

namespace App\Repository;

use App\Entity\Pass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pass>
 *
 * @method Pass|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pass|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pass[]    findAll()
 * @method Pass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pass::class);
    }

    public function save(Pass $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Pass $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Pass[] Returns an array of Pass objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pass
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findPassByIdClient($clientId)
{
    $qb = $this->createQueryBuilder('s')
        ->leftJoin('s.client', 'e')
        ->andWhere('e.id = :clientId')
        ->setParameter('clientId', $clientId)
        ->getQuery();

    return $qb->getResult();
}

public function findPassByIdEvent($eventId)
{
    $qb = $this->createQueryBuilder('s')
        ->leftJoin('s.event', 'e')
        ->andWhere('e.id = :eventId')
        ->setParameter('eventId', $eventId)
        ->getQuery();

    return $qb->getResult();
}

}
