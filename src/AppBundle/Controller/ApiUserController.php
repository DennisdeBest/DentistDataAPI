<?php
namespace AppBundle\Controller;

use AppBundle\Entity\AllForms;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use JMS\Serializer\Serializer;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use AppBundle\Entity\Form0;
use AppBundle\Entity\Form1;
use AppBundle\Entity\Form2;
use AppBundle\Entity\Form3;
use AppBundle\Entity\Form4;
use AppBundle\Entity\Form5;
use AppBundle\Entity\Form6;
use AppBundle\Entity\Form7;
use AppBundle\Entity\Form8;
use AppBundle\Entity\Form9;
use AppBundle\Entity\Form10;
use AppBundle\Entity\Form11;
use AppBundle\Entity\Form12;
use AppBundle\Entity\Form13;
use AppBundle\Entity\Form14;
use AppBundle\Entity\Form15;
use AppBundle\Entity\Form16;
use AppBundle\Entity\Form17;
use AppBundle\Entity\Form18;
use AppBundle\Entity\Form19;
use AppBundle\Entity\Form20;
use AppBundle\Entity\Form21;
use AppBundle\Entity\Form22;
use AppBundle\Entity\Form23;


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
        $logger->info("Save form content");
        $logger->info($request->getContent());
        $logger->info("Deserialize");
        //$logger->info($this->deserialize($request->getContent(), Form0::class));
        $data = json_decode($request->getContent(), true);
        $logger->info("JSON decoded");
        //return new Response($data[0], '409');
        $logger->info($data);
        $numbers = [];

        $allForms = new AllForms();
        //$allForms->setUser($this->getUser()->id);
        //$logger->info($allForms->getUser());
        foreach ($data as $key=>$value) {
            $logger->info($value);
            if (preg_match_all('/\d+/', $key, $matches)) {
                $number = $matches[0][0];
                $logger->info($number);
                $newNumber = 0;
                if(!in_array($number, $numbers)){
                    $newNumber = $number;
                    $numbers[]= $number;
                    $entity = "Form".$number;
                    $logger->info($entity);
                    //$entityObjects = new $entity();
                    switch ($number){
                        case "0":
                            $entity = new Form0();
                            break;
                        case "1":
                            $entity = new Form1();
                            break;
                        default:
                            $entity = new Form0();
                    }
                    $form1 = new Form1();
                }
            }
        }
    }

    public function jsonToArray($json){

    }
}