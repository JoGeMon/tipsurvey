<?php

namespace Tipddy\TipddySurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TipddyTipddySurveyBundle:Default:index.html.twig', array('name' => $name));
    }
}
