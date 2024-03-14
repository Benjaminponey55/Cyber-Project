<?php

namespace Controller;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class DecodageController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $message = $request->getVars()["message"];
        $decodageMess=base64_decode($message);
//        var_dump($message);
//        var_dump($decodageMess);


        return TwigCore::getEnvironment()->render('decodage/decodage.html.twig',
            [
                'titre'   => 'Hello ben !',
                'requete' => $request,
                'reponse' => $decodageMess,
            ]
        );
    }
}