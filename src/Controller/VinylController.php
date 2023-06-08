<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }

    #[Route('/browse/{genre}')]
    public function browse(string $genre = null): Response //can make slug optional with = null
    {
        if ($genre) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $genre))->title(true);
        } else {
            $title = 'All genres';
        }

        return new Response($title);
    }
}