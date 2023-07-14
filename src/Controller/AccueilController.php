<?php

namespace App\Controller;



use Knp\Component\Pager\ArgumentAccess\ArgumentAccessInterface;
use Knp\Component\Pager\Exception\PageLimitInvalidException;
use Knp\Component\Pager\Exception\PageNumberInvalidException;
use Knp\Component\Pager\Exception\PageNumberOutOfRangeException;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(ProduitsRepository $produitsRepository): Response
    {

        return $this->render('accueil/index.html.twig', [
            'produits' => $produitsRepository->findAll(),

        ]);
    }
}