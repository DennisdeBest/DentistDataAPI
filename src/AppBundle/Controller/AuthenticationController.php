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
        $authenticator = $this->get('token_authenticator');
        $userProvider = $this->get('fos_user.user_manager');
        $token = $authenticator->getCredentials($request);
        if ($token) {
            try {
                $data = $authenticator->getUser($token, $userProvider);
            } catch (ExpiredTokenException $e) {
                $response = new Response($this->serialize("Token expired"), Response::HTTP_FORBIDDEN);
                return $this->setBaseHeaders($response);
            }
        } else {
            $response = new Response($this->serialize("Missing token"), Response::HTTP_FORBIDDEN);
            return $this->setBaseHeaders($response);
        }
        if (!$data) {
            $response = new Response($this->serialize("Bad credentials"), Response::HTTP_FORBIDDEN);
        } else {
            $response = new Response($this->serialize([$data]), Response::HTTP_OK);
        }
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