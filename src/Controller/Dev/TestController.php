<?php

namespace App\Controller\Dev;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController {
    #[Route(path:"/test", name: "app_dev_test", methods:['GET'])]
    public function test() : Response {
        return $this->json(data: [
            'health' => true
        ], status: 200);
    }
}