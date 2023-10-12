<?php

namespace App\Repository;

use App\Entity\Guide;
use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Guide>
 *
 * @method Guide|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guide|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guide[]    findAll()
 * @method Guide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guide::class);

    }

    public function findGuideById(int $userId)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g.id
                FROM App\Entity\Guide g
                WHERE g.user_id = :userId'
              )->setParameter('userId', $userId);

        $result = $query->getOneOrNullResult();

        return $result ? $result['id'] : null;
    }

    public function findGuide(int $userId)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g
                FROM App\Entity\Guide g
                WHERE g.user_id = :userId'
        )->setParameter('userId', $userId);

        return $query->getOneOrNullResult();


    }

    public function showGuideById(int $userId){

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g.id AS id, g.firstname, g.lastname, g.bio , g.telNumber
                FROM App\Entity\Guide g
                WHERE g.user_id = :userId
                ORDER BY g.id DESC'
            )->setParameter('userId', $userId);

        return $query->getOneOrNullResult();

    }

    public function showGuideDetails(int $userId){

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g.id AS id, g.firstname, g.lastname, g.bio, g.telNumber
                        user.email, user.username           
                FROM App\Entity\Guide g
                JOIN g.user_id user
                WHERE g.user_id = :userId
                ORDER BY g.id DESC'
        )->setParameter('userId', $userId);

        return $query->getOneOrNullResult();

    }

    public function showGuideDetailsByGuide(int $guideId){

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g.id AS id, g.firstname, g.lastname, g.bio, g.telNumber,
                        user.email, user.username           
                FROM App\Entity\Guide g
                JOIN g.user_id user
                WHERE g.id = :guideId
                ORDER BY g.id DESC'
        )->setParameter('guideId', $guideId);

        return $query->getOneOrNullResult();
    }

    public function getLocationByGuideId(int $guideId)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT g.id AS id, g.firstname, g.lastname, g.bio, g.telNumber, CONCAT(l.city, \' , \', l.country) AS location
                FROM App\Entity\Guide g
                JOIN g.id_location l
                WHERE g.id = :guideId
                ORDER BY g.id DESC'
                )->setParameter('guideId', $guideId);

        return $query->getOneOrNullResult();
    }



//    /**
//     * @return Guide[] Returns an array of Guide objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Guide
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
