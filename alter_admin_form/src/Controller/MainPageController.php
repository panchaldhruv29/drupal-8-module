<?php

/**
 * @file
 * Contains \Drupal\alter_site_information\Controller\MainPageController.
 */
namespace Drupal\alter_site_information\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainPageController extends ControllerBase {
  public function mainPage() {
    $current_path = \Drupal::service('path.current')->getPath();
    $current_path_explode = explode('/', $current_path);
    $path_nid = $current_path_explode[2];
    $node = \Drupal\node\Entity\Node::load($path_nid);
	$nid = $node->id();
	$title = $node->getTitle();
	$body = $node->get('body')->getValue();
	$body_value = $body[0]['value'];
	$json[] = ['id' => $nid, 'title' => $title, 'body' => $body];
	return new JsonResponse($json);
  }
}

?>
