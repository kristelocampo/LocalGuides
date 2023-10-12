<?php

namespace App\Repository;

use App\Entity\Itineraries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Itineraries>
 *
 * @method Itineraries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Itineraries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Itineraries[]    findAll()
 * @method Itineraries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItinerariesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Itineraries::class);
    }

    public function showItineraries()
    {
        $query = $this->getEntityManager()->createQueryBuilder('i');

        return $query->getQuery();
    }

    public function showAllItineraries(){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT
                    i.id, i.title, i.description, i.created_date as createdDate, image.name, image.id AS idImage,
                    i.tarif,guide.firstname, guide.lastname, guide.id AS idGuide
                 FROM App\Entity\Itineraries i
                 JOIN i.id_guide guide
                 LEFT JOIN i.id_images image
                 ORDER BY i.id DESC');

        return $query->getResult();
    }

    public function getItineraryById($itineraryId){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT 
                    i.id, i.title, i.description, i.created_date as createdDate, i.tarif, image.name, image.id AS idImage,
                    guide.firstname, guide.lastname, guide.id AS idGuide, guide.telNumber, guide.bio
                 FROM App\Entity\Itineraries i
                 JOIN i.id_guide guide
                 LEFT JOIN i.id_images image
                 WHERE i.id = :itineraryId
                 ORDER BY i.id DESC');
        $query->setParameter('itineraryId', $itineraryId);
        return $query->getOneOrNullResult();
    }

    public function getItineraryByGuideId($guideId){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT 
                    i.id, i.title, i.description, i.created_date AS createdDate, i.tarif,
                    guide.firstname, guide.lastname , image.id AS idImage, image.name
                 FROM App\Entity\Itineraries i
                 JOIN i.id_guide guide
                 LEFT JOIN i.id_images image
                 WHERE i.id_guide = :guideId
                 ORDER BY i.id DESC');
        $query->setParameter('guideId', $guideId);
        return $query->getResult();
    }

//    /**
//     * @return Itineraries[] Returns an array of Itineraries objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Itineraries
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
