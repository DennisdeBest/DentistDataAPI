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

    /**
     * @param Request
     * $request
     * @return Response
     */
    public function promoteAction(Request $request)
    {
        $userProvider = $this->get('fos_user.user_manager');
        $id = $request->get("userId");
        $em = $this->getDoctrine()->getManager();
        $userToPromote = $em->getRepository('AppBundle:User')
            ->find($id);
        $userToPromote->addRole('ROLE_CUSTOMER');
        $userProvider->updateUser($userToPromote, false);
        $em->persist($userToPromote);
        $em->flush();

        $response = new Response($this->serialize("User promoted"), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

    public function demoteAction(Request $request)
    {
        $userProvider = $this->get('fos_user.user_manager');
        $id = $request->get("userId");
        $em = $this->getDoctrine()->getManager();
        $userToPromote = $em->getRepository('AppBundle:User')
            ->find($id);
        $userToPromote->removeRole('ROLE_CUSTOMER');
        $userProvider->updateUser($userToPromote, false);
        $em->persist($userToPromote);
        $em->flush();

        $response = new Response($this->serialize("User demoted"), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

    public function getClientsAction(Request $request){

    }

    public function saveFormAction(Request $request)
    {
        $logger = $this->get('logger');
        $logger->info("Save form logger");
        $logger->info($request);
        $data = $request->get('data');
        $numbers = [];
        foreach ($data as $item) {
            if (preg_match_all('/\d+/', $item, $matches)) {
                $number = $matches[0][0];
                if(!in_array($number, $numbers)){
                    $numbers[]= $number;
                    $entity = "Form".$number;
                    $entityObjects = new $entity();
                }
            }
        }
    }
}