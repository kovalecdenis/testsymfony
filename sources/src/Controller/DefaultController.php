<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    /**
     * @Route("/", name="default_controller")
     */
    public function index() {
        echo 'Hello world!';
        die;
    }
}