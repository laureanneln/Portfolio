<?php

namespace App\Controller;

use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
     * @Route("/", name="home")
     */
    public function index(SkillRepository $repo) {

        $skills = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'skills' => $skills
        ]);
    }
}
