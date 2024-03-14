<?php

namespace Controller;

use Studoo\EduFramework\Core\Controller\ControllerInterface;
use Studoo\EduFramework\Core\Controller\Request;
use Studoo\EduFramework\Core\View\TwigCore;

class EncodageController implements ControllerInterface
{

    public function execute(Request $request): string|null
    {
        $message = $request->getVars()["message"];
        $encodageMess=base64_encode($message);
//        var_dump($message);
//        var_dump($encodageMess);


        return TwigCore::getEnvironment()->render('encodage/encodage.html.twig',
            [
                'titre'   => 'Hello ben !',
                'requete' => $request,
                'reponse' => $encodageMess,
            ]
        );
    }
}