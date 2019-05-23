<?php

namespace Drupal\bc_testimonial\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class BcTestimonialController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function feature_quotes() {
	$query = \Drupal::entityQuery('node')
     ->condition('status', 1)
     ->condition('type', 'bc_testimonial') 
     ->condition('field_feature_quote',1, '=') 
     ->pager(10);
    $nids = $query->execute();
    $slider = '<li>';
	foreach ($nids as $nid) {
		$node = \Drupal\node\Entity\Node::load($nid);
		$body = $node->body->value;
		$title = $node->title->value;
		$avatar = $node->get('field_bc_testimonial_avatar')->entity->getFileUri();
		if ($wrapper = \Drupal::service('stream_wrapper_manager')->getViaUri($avatar)) {
			$avatar = $wrapper->getExternalUrl();
		}
		$slider.= '<div class="bc_main_quote">
		<div class="bc_title_quote">'.$title.'</div>
		<div class="bc_body_quote">'.$body.'</div>
		<div class="bc_image_quote"><img src="'.$avatar.'"></div>
		</div>';
	}    
	$slider.= '</li>';
    $build = [
      '#markup' => $slider,
    ];
    return $build;
  }

}
