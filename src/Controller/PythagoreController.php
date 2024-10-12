<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Utils\PythagoreUtility;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }
    // Utilisation de #[Route()] à la place de l'annotation @
    #[Route("/pythagore/view", name:"pythagore_view")]
    public function displayPythagoreAction(): Response
    {
        $tableHtml = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'table' => $tableHtml
        ]);
    }
}
