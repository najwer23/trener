<?php

namespace App\Controller;

use App\Entity\FastHistory;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $userId = $user->getId();

        $query = $this->getDoctrine()
            ->getRepository(FastHistory::class)->createQueryBuilder('fh')
            ->andWhere('fh.userId =:userId')
            ->setParameter('userId', $userId)
            ->getQuery();
        $moments = $query->getArrayResult();

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'page_name' => 'Your Profil',
            'moments' => $moments,
        ]);
    }
}
