<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class LuckyController {
    /**
     * @Route("/lucky", name="lucky_controller")
     */
    public function number() {
        echo 'hello(LuckyController)!';
        die;
    }
}
