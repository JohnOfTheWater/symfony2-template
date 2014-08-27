<?php

namespace Delacqua\Bundle\FaceBlockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DelacquaFaceBlockBundle:Default:index.html.twig', array('name' => $name));
    }
}
