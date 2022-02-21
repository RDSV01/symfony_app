<?php
namespace App\Controller;

use App\Entity\NouvUtilisateur3;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\UtilisateurType;

class UtilisateurController extends AbstractController{
    /**
    * @Route("utilisateur")
    */
    function createUtilisateurForm(Request $request){
        $utilisateur = new NouvUtilisateur3();

        /*Appel de la méthode createFormBuilder appartenant à AbstactController
        Elle prend 1 paramètre : L'instance de l'entité */
        $form = $this->createForm(UtilisateurType :: class, $utilisateur);
            
      
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /* Récupération d'un objet contenant les valeurs saisies dans le formilaire */
            $utilisateurInfos = $form->getData();
            /*Création d'un objet $entityManager qui va s'occuper de toutes nos entités
            et permet les intéractions entrer entités et bases de données */
            $entityManager = $this->getDoctrine()->getManager();
            /*Demande à l'entityManeger de faire persiter l'objet que l'on vient de créeer, $utilisateurInfo
            La méthode persist prépare l'opération */
            $entityManager->persist($utilisateurInfos);
            /*Demande d'exécution de l'opération par la méthode flush */
            $entityManager->flush();
            return new Response ('Formulaire validé');
        }
        else{
            return $this->render('form.html.twig', ['utilisateurform'=>$form->createView()]);
        }

    }


    


    
        
    

        
}