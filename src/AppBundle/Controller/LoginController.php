<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class LoginController extends Controller
{
    use \AppBundle\Helper\ControllerHelper;

    public function loginAction(Request $request)
    {
        $userName = $request->getUser();
        $password = $request->getPassword();

        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(['username' => $userName]);

        if (!$user) {
            throw new BadCredentialsException();
        }

        $isValid = $this->get('security.password_encoder')
            ->isPasswordValid($user, $password);

        if (!$isValid) {
            throw new BadCredentialsException();
        }

        $token = $this->getToken($user);
        $response = new Response($this->serialize(['token' => $token]), Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

    /**
     * Returns token for user.
     *
     * @param User $user
     *
     * @return array
     */
    public function getToken(User $user)
    {
        return $this->container->get('lexik_jwt_authentication.encoder')
            ->encode([
                'username' => $user->getUsername(),
                'exp' => $this->getTokenExpiryDateTime(),
            ]);
    }

    /**
     * Returns token expiration datetime.
     *
     * @return string Unixtmestamp
     */
    private function getTokenExpiryDateTime()
    {
        $tokenTtl = $this->container->getParameter('lexik_jwt_authentication.token_ttl');
        $now = new \DateTime();
        $now->add(new \DateInterval('PT'.$tokenTtl.'S'));

        return $now->format('U');
    }
}
