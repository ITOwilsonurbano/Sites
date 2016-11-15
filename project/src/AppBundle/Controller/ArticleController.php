<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// src/AppBundle/Controller/ArticleController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller {

    public function indexAction($numb = 10) {
        $ram = mt_rand(0, $numb);
         
            $this->addFlash('notice','Your changes in number were saved!');
        
            return $this->render('article/num.html.twig', array('name' => $ram));
    }

    public function nameAction(Request $request,$user) {
        $session = $request->getSession();
        if ($user) {
            $session->set('pers', $user);
        
        } else {
            $user = $session->get('pers');  
            
            $this->addFlash('notice','Your changes in name were saved!');
        } 
       // return $this->json(array('username' => $user));
        return $this->render('article/name.html.twig', array('pers' => $user));
    }

}

/* "ESTAS FUNCIONES TIENEN URL DIFERENTE QUE ME LLEVAN A LA VISTA DONDE IMPRIME LOS DATOS"
  public function indexAction($num = 10)
  {
  return $this->render('article/num.html.twig', array('name' => $num));
  }

  public function nameAction($name)
  {
  if (is_numeric($name)) {    "verifica si $name es un numero"
  $numb = mt_rand(0, $name);
  } else {
  $numb = $name;
  }
  return $this->render('article/list.html.twig', array('name' => $numb));
  }
 */
?>
