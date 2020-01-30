<?php

namespace App\Controller;

use App\Repository\AboutUsRepository;
use App\Repository\PerformancesRepository;
use App\Repository\PricesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PerformancesRepository $performances, AboutUsRepository $aboutus, PricesRepository $prices)
    {
        return $this->render('home/index.html.twig', [
            'performances' => $performances->findOneBy(['id' => 1]),
            'aboutus' => $aboutus->findOneBy(['id'=> 1]),
            'prices' => $prices->findAll(),
        ]);
    }
}
