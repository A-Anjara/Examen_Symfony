<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 class PrescriptionControleController extends AbstractController
{
    #[Route('/contact', name: 'contact_form')]
    public function contact(): Response
    {
        return $this->render('formulaire/test.html.twig');
    }

    #[Route('/submit', name: 'submit_form', methods: ['POST'])]
    public function submit(Request $request): Response
    {
        $name = $request->request->get('name');
        $email = $request->request->get('email');

        // You can handle, validate, or log the form data here
        return new Response("Form submitted! Name: $name, Email: $email");
    }
}
