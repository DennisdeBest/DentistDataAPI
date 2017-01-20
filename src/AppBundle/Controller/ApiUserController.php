<?php
namespace AppBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;

class ApiUserController extends BaseController
{
    use \AppBundle\Helper\ControllerHelper;

    public function promoteAction(Request $request)
    {
        $userProvider = $this->get('fos_user.user_manager');
        $id = $request->get("userId");
        $em = $this->getDoctrine()->getEntityManager();
        $userToPromote = $em->getRepository('AppBundle:User')
            ->find($id);
        $logger = new Logger();
        $logger->info("User");
        $logger->info($userToPromote);
        $userToPromote->addRole("ROLE_CUSTOMER");
        $userProvider->updateUser($userToPromote, false);
        $em->persist($userToPromote);
        $em->flush();

        $response = new Response($this->serialize("User promoted"), Response::HTTP_OK);
 
        return $this->setBaseHeaders($response);
    }

    public function demoteAction(Request $request)
    {

    }
}