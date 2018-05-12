<?php

namespace App\Controller;

use App\Form\ReviwType;
use App\Form\TodoType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    /**
     * @Route("/shop", name="shop")
     */
    public function index()
    {

        $form = $this->createForm(ReviwType::class);
        return $this->render('shop/index.html.twig',['form' => $form->createView()]);


                }
    /**
     * @Route("/about", name="about")
     */
    public function index1()
    {
        return $this->render('shop/about.html.twig',[]);
    }

}
