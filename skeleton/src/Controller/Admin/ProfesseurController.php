<?php

namespace App\Controller\Admin;

use App\Entity\Professeur;
use App\Form\ProfesseurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfesseurController extends AbstractController{

    public function new(Request $request,EntityManagerInterface $em):Response{

        $professeur =new Professeur();
        $form = $this->createForm(ProfesseurType::class,$professeur);

        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em->persist($professeur);
            $em->flush();
        }
        return $this->render('admin/addProfesseur.html.twig',['form'=>$form->createView()]);
    }
}