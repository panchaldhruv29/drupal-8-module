<?php

namespace Drupal\alter_site_information\Controller;

/**
 * @file
 * Contains \Drupal\alter_site_information\Controller\MainPageController.
 */

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainPageController extends ControllerBase {
  public function mainPage() {
    $config = \Drupal::service('config.factory')->getEditable('siteapikey.settings');
    $config_key = $config->get('site_api_key');
    $current_path = \Drupal::service('path.current')->getPath();
    $current_path_explode = explode('/', $current_path);
    $path_key = $current_path_explode[2];
    $path_nid = $current_path_explode[3];
    $node = Node::load($path_nid);
    $nid = $node->id();
    $title = $node->getTitle();
    $body = $node->get('body')->getValue();
    $body_value = $body[0]['value'];
    if ($path_key == $config_key) {
      $json[] = ['id' => $nid, 'title' => $title, 'body' => $body];
      return new JsonResponse($json);
    }
    else {
      print 'Please insert correct key.';
      exit;
    }
  }

}
