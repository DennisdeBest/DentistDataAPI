<?php
namespace AppBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ApiUserController extends BaseController
{
    use \AppBundle\Helper\ControllerHelper;

    public function promoteAction(Request $request){
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
            if($data->hasRole("ROLE_ADMIN")){
                $id = $request->get("userId");
                $em = $this->getDoctrine()->getEntityManager();
                $userToPromote = $em->getRepository('AppBundle:User')
                    ->find($id);
                $logger = $this->get('logger');
                $logger->info("User");
                $logger->info($userToPromote);
                $userToPromote->addRole("ROLE_USER");
                $userProvider->updateUser($userToPromote, false);
                $em->persist($userToPromote);
                $em->flush();

                $response = new Response($this->serialize("User promoted"), Response::HTTP_OK);
            }
            else {
                $response = new Response($this->serialize("Missing token"), Response::HTTP_FORBIDDEN);
            }

        }
        return $this->setBaseHeaders($response);
    }

    public function demoteAction(Request $request){

    }
}