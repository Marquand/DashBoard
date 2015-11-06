<?php

namespace PointWeb\FicheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PointWebFicheBundle:Default:index.html.twig');
    }

    public function detailAction()
    {
        return $this->render('PointWebFicheBundle:Default:detail.html.twig');
    }
}
