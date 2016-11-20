<?php

namespace TestFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestFormController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestFormBundle:Default:index.html.twig');
    }
}
