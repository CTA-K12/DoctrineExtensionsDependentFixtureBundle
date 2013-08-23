<?php

namespace MESD\DoctrineExtensions\DependentFixtureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MESDDoctrineExtensionsDependentFixtureBundle:Default:index.html.twig', array('name' => $name));
    }
}
