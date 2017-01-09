<?php
/**
 * Created by PhpStorm.
 * User: dennisdebest
 * Date: 09/01/17
 * Time: 08:41
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("is_granted('ROLE_USER')")
 */
class FormController extends Controller
{
    use \AppBundle\Helper\ControllerHelper;

    public function formAction(Request $request)
    {
        $response = new Response($this->serialize('Hello user.'), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }
}