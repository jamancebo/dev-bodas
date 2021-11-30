<?php

declare(strict_types=1);

namespace DevBodas\Dev\Infrastructure\EntryPoint\Controller;

use DevBodas\Shared\Infrastructure\EntryPoint\EntryPointToJsonResponse;
use League\Tactician\CommandBus;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Homepage extends AbstractController
{
    public function __invoke() {
        return $this->render('base.html.twig');
    }
}
