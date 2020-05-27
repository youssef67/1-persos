<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/armes", name="armes")
     */
    public function index()
    {
        Arme::CreerArmes();

        return $this->render('arme/armes.html.twig', [
            'armes' => Arme::$armes
        ]);
    }

    /**
     * @Route("/arme/{nom}", name="afficher_arme")
     */
    public function getArmeParNom($nom)
    {
        Arme::CreerArmes();

        return $this->render('arme/arme.html.twig', [
            'arme' => Arme::getArmeParNom($nom)
        ]);
    }
}
