<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
     
    public function showAction($page=10)
        {
        $number = mt_rand(0,$page);
        
        return $this->render('blog/numb.html.twig', array('number' => $number ));
     }
}