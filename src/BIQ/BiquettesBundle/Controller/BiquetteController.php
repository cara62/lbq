<?php

namespace BIQ\BiquettesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BiquetteController extends Controller
{
    public function indexAction()
    {
        return $this->render('BIQBiquettesBundle::index.html.twig');
    }
    
    public function liveAction()
    {
        return $this->render('BIQBiquettesBundle::live.html.twig');
    }
            
}

