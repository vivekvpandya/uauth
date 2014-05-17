<?php

namespace Drupal\uauth\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;


class UauthController extends ControllerBase {

  public static function create(ContainerInterface $container){

    return new static($container->get('module_handler'));

  }

   public function uauthPage(){

     /*$build = array(
       '#type' => 'markup',
       '#markup' => t('Hello World'),
     );
     return $build;
*/
$account = $this->currentUser();
$userName = $account->getUsername();
$email = $account->getEmail();
$roles = $account->getRoles();
$responseArray = array('name' => $userName,
                        'email' => $email,
                        'roles' => $roles

);
$response = new Response(json_encode($responseArray));
$response->headers->set('Content-Type','application/json');


return $response;
   }
}
