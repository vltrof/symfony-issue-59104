<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class HomeController extends AbstractController
{
    #[Route(path: "/test", name: "test", methods: ["GET"], format: "json")]
    public function readAll(
        Request $request,
        #[MapQueryString] FilterDTO $filter = new FilterDTO,
    ): JsonResponse
    {
        dd($filter, $request->query->all());
    }
}
