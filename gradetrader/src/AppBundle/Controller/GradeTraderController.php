<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class GradeTraderController extends Controller
{
    /**
     * @Route("/", name="gradetrader")
     */
    public function listAction()
    {
        // replace this example code with whatever you need
        return $this->render('gt/index.html.twig');
    }

    /**
     * @Route ("/gt/play", name="gt_play")
     */
    public function playAction(Request $request){
        return $this ->render ('gt/play.html.twig');
    }
    /**
     * @Route("/gt/tester/{id}", name="gt_test")
     */
    public function testAction($id)
        
    {
        // replace this example code with whatever you need
        return $this->render('gt/tester.html.twig');
    }
    /**
     * @Route ("/gt/login/{id}", name="gt_login")
     */
    public function loginAction($id)
    {
        return $this->render('gt/login.html.twig');
    }
    public function secureAction($id, Request $request)
    {

    }
}
