<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{

    public function index(EntityManagerInterface $em, Request $request):Response{
        // $evenement=new Evenement();
        // $form=$this->createForm(EvenementType::class,$evenement);

        // $form->handleRequest($request);

        // if($form->isSubmitted()&& $form->isValid()){
        //    $em->persist($evenement);
        //    $em->flush();
        // }
        

        return $this->render('base.html.twig',[
           
        ]);
    }
}