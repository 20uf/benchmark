<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BenchmarkController
{
    public function test1()
    {
        return new JsonResponse(['message' => 'Hello, World!']);
    }

    public function test2()
    {
        // TODO
    }

    public function test3()
    {
        // TODO
    }

    public function test4()
    {
        // TODO
    }

    public function test5()
    {
        // TODO
    }

    public function test6()
    {
        return new Response('Hello, World!', 200, ['Content-Type' => 'text/plain']);
    }
}
