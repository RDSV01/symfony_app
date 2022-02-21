<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnonceController extends AbstractController{
    /**
     * @Route("listeAnnonces", name="listeAnnonces")
     */

     function listeAnnonces(){
         $listeannonces = $this->getDoctrine()->getRepository(Annonce::class)->findAll();
         return $this->render('listeannonces.html.twig', ['listeannonces' => $listeannonces]);
     }
}