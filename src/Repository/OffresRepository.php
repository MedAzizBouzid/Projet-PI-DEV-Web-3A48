<?php

namespace App\Repository;

use App\Entity\Offres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;




/**
 * @extends ServiceEntityRepository<Offres>
 *
 * @method Offres|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offres|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offres[]    findAll()
 * @method Offres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offres::class);
    }

    public function save(Offres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        
        if ($flush) {
            $this->getEntityManager()->flush();
        }

    }

   

//    /**
//     * @return Offres[] Returns an array of Offres objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Offres
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findAllData()
{
    return $this->createQueryBuilder('e')
        ->getQuery()
        ->getResult()
    ;
}

public function tri()
{
    return $this->createQueryBuilder('e')
    ->orderBy('e.prix','ASC')
    ->getQuery()
    ->getResult()
;
}
//////////////////stat/////////
public function getOffresByAbonnements(): array
{
    $qb = $this->createQueryBuilder('o')
        ->leftJoin('o.abonnements', 'a')
        ->leftJoin('o.categ', 'c')
        ->select('o.id, o.prix, o.duree, o.description, c.name as categ, COUNT(a.id) AS nbAbonnements')
        ->groupBy('o.id')
        
        
        
        ->orderBy('nbAbonnements', 'DESC')
        ->getQuery();

    return $qb->getResult();
}
/////////////////stat////////////////
public function getAbonnementsByDate(): array
{
    $qb = $this->createQueryBuilder('o')
        ->leftJoin('o.abonnements', 'a')
        ->select('a.DateD as date, COUNT(a.id) AS nb')
        ->groupBy('a.DateD')
        ->orderBy('nb', 'DESC')
        ->getQuery();

    return $qb->getResult();
}
}
