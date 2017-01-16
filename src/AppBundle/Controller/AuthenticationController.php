<?php
namespace AppBundle\Controller;

use AppBundle\Security\TokenAuthenticator;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\Form\FormInterface;
use JMS\Serializer\SerializationContext;

class AuthenticationController extends BaseController
{
    use \AppBundle\Helper\ControllerHelper;

    public function authenticateAction(Request $request)
    {
        $authenticator = $this->get('token_authenticator');
        $token = $authenticator->getCredentials($request);
        if($token){
            $data = $authenticator->getUser($token, $this->get('fos_user.user_manager'));
        } else {
            $response = new Response("Bad crendentials", Response::HTTP_FORBIDDEN);
            return $this->setBaseHeaders($response);
        }
        if(!$data){
            $response = new Response("Bad crendentials", Response::HTTP_FORBIDDEN);
        }else {
            $response = new Response($this->serialize([$data]), Response::HTTP_OK);
        }
        return $this->setBaseHeaders($response);
    }

}