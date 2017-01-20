<?php
namespace AppBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AuthenticationController extends BaseController
{
    use \AppBundle\Helper\ControllerHelper;


    /**
     * @Security("is_granted('ROLE_USER')")
     * @param Request $request
     * @return Response
     */
    public function authenticateAction(Request $request)
    {
        $logger = $this->get('logger');
        $logger->info("Custom Auth logger");
        if($user = $this->getUser()){
            $logger->info("User found");
            $logger->info($user);
        }
        $response = new Response($this->serialize(["KEK"]), Response::HTTP_OK);
        return $this->setBaseHeaders($response);
    }

    /**
     * @Security("is_granted('ROLE_USER')")
     * @param Request $request
     * @return Response
     */
    public function getUsersAction(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $repo->findAll();
        $response = new Response($this->serialize($users), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

}