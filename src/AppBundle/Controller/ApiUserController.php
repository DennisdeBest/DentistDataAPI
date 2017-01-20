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
        $logger = new Logger('');
        $userProvider = $this->get('fos_user.user_manager');
        $id = $request->get("userId");
        $logger->addInfo($id)
        $em = $this->getDoctrine()->getManager();
        $userToPromote = $em->getRepository('AppBundle:User')
            ->find($id);

        $logger->addInfo("User");
        $logger->addInfo($userToPromote);
        $userToPromote->addRole('ROLE_CUSTOMER');
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