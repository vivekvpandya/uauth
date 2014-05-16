<?php

namespace Drupal\uauth\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UauthController extends ControllerBase {

  public static function create(ContainerInterface $container){

    return new static($container->get('module_handler'));

  }

   public function uauthPage(){

     $build = array(
       '#type' => 'markup',
       '#markup' => t('Hello World'),
     );
     return $build;



   }
}
