<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 *
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function showArticleById(int $guideId){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a.id, a.title, a.context, guide.id_guide
                FROM App\Entity\Article a
                JOIN a.id_guide guide
                WHERE a.id_guide = :guideId
                ORDER BY a.id DESC'
        )->setParameter('guideId', $guideId);

        return $query->getResult();
    }

    public function showAllArticle(){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a.id, a.title, a.context, guide.id AS idGuide, guide.firstname, guide.lastname 
                 FROM App\Entity\Article a
                 JOIN a.id_guide guide
                 ORDER BY a.id DESC');

        return $query->getResult();
    }

    public function getArticleById($articleId){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT 
                    a.id, a.title, a.context,
                    guide.firstname, guide.lastname, guide.id AS idGuide, guide.telNumber, guide.bio
                 FROM App\Entity\Article a
                 JOIN a.id_guide guide
                 WHERE a.id = :articleId
                 ORDER BY a.id DESC');
        $query->setParameter('articleId', $articleId);
        return $query->getOneOrNullResult();
    }

    public function getArticleByGuideId($guideId){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a.id, a.title, a.context, guide.firstname, guide.lastname
                 FROM App\Entity\Article a
                 JOIN a.id_guide guide
                 WHERE a.id_guide = :guideId
                 ORDER BY a.id DESC');
        $query->setParameter('guideId', $guideId);
        return $query->getResult();
    }




//    /**
//     * @return Article[] Returns an array of Article objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
