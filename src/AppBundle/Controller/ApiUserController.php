<?php
namespace AppBundle\Controller;

use AppBundle\Entity\AllForms;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use JMS\Serializer\Serializer;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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

    /**
     * @Security("is_granted('ROLE_USER')")
     */
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

        $user = $this->getUser();
        $logger->info("USER BITE");
        $logger->info($user);
        $allForms->setUser($this->getUser());
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
                    //$entity = "Form".$number;
                    //$logger->info($entity);
                    //$entityObjects = new $entity();
                    switch ($number){
                        case "0":
                            $entity = new Form0();
                            break;
                        case "1":
                            $entity = new Form1();
                            break;
                        case "2":
                            $entity = new Form2();
                            break;
                        case "3":
                            $entity = new Form3();
                            break;
                        case "4":
                            $entity = new Form4();
                            break;
                        case "5":
                            $entity = new Form5();
                            break;
                        case "6":
                            $entity = new Form6();
                            break;
                        case "7":
                            $entity = new Form7();
                            break;
                        case "8":
                            $entity = new Form8();
                            break;
                        case "9":
                            $entity = new Form9();
                            break;
                        case "10":
                            $entity = new Form10();
                            break;
                        case "11":
                            $entity = new Form11();
                            break;
                        case "12":
                            $entity = new Form12();
                            break;
                        case "13":
                            $entity = new Form13();
                            break;
                        case "14":
                            $entity = new Form14();
                            break;
                        case "15":
                            $entity = new Form15();
                            break;
                        case "16":
                            $entity = new Form16();
                            break;
                        case "17":
                            $entity = new Form17();
                            break;
                        case "18":
                            $entity = new Form18();
                            break;
                        case "19":
                            $entity = new Form19();
                            break;
                        case "20":
                            $entity = new Form20();
                            break;
                        case "21":
                            $entity = new Form21();
                            break;
                        case "22":
                            $entity = new Form22();
                            break;
                        case "23":
                            $entity = new Form23();
                            break;
                        default:
                            $entity = "rien";
                    }
                }
                $logger->info($number." ".$newNumber." ".$value);
                if($newNumber == $number){
                    $logger->info($number." ".$key." ".$value);
                    $set = "set".$key;
                    $get = "get".$key;
                    $entity->$set($value);
                    $logger->info("*******ENTITY*******");
                    $logger->info($entity->$get());
                    $this->getDoctrine()->getManager()->persist($entity);
                    $formnumber = "setForm".$number;
                    $allForms->$formnumber($entity);
                    $this->getDoctrine()->getManager()->persist($allForms);
                    $this->getDoctrine()->getManager()->flush();
                }
            }
        }
    }
}