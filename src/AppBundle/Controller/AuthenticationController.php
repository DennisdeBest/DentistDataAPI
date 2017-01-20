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

    public function authenticateAction(Request $request)
    {
        $user = $this->getUser();
        $response = new Response($this->serialize([$user]), Response::HTTP_OK);
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