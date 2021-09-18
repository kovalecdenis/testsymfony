<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function index() {
      return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/about", name="default_about")
     */
    public function About() {
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/feedback", name="default_feedback")
     */
    public function Feedback() {
        return $this->render('default/feedback.html.twig');
    }
}