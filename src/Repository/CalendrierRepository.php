<?php

namespace App\Repository;

use App\Entity\Calendrier;
use App\Entity\Salle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Calendrier>
 *
 * @method Calendrier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendrier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendrier[]    findAll()
 * @method Calendrier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendrierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendrier::class);
    }

    public function save(Calendrier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Calendrier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

       public function findCalendarBySalle($value): array
   {
    //   $salle = $salleRepository->findOneBy(['id' => $value]);
    
    //  if (!$salle) {
    //     return [];
    // }
    
    // Récupérer l'id de la salle
    // $id_salle = $salle->getId();

    // Requête pour sélectionner les calendriers de la salle
    return $this->createQueryBuilder('c')
        ->andWhere('c.salla = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
    ;
     }
//    /**
//     * @return Calendrier[] Returns an array of Calendrier objects
//     */
//    public function findByExampleField($value): array
//    {
//     // select * c from app/calendrier c where c.begin
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Calendrier
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
