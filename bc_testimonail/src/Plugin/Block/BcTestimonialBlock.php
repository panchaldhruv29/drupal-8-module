<?php
/**
 * @file
 * Contains \Drupal\bc_testimonial\Plugin\Block\BcTestimonialBlock.
 */
namespace Drupal\bc_testimonial\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "bc_testimonial",
 *   admin_label = @Translation("BC Testimonial block"),
 *   category = @Translation("Custom Testimonial block")
 * )
 */

class BcTestimonialBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $query = \Drupal::entityQuery('node')
       ->condition('status', 1)
       ->condition('type', 'bc_testimonial') 
       ->condition('field_feature_membership',1, '=')
       ->pager(10);
    $nids = $query->execute();
	$html_slider = array();
	$slider = '<div class="cf" id="container"><div id="main" role="main"><section class="slider"><div class="flexslider carousel"><ul class="slides">';
	foreach ($nids as $nid) {
		$node = \Drupal\node\Entity\Node::load($nid);
		$body = $node->body->value;
		$title = $node->title->value;
		$avatar = $node->get('field_bc_testimonial_avatar')->entity->getFileUri();
		if ($wrapper = \Drupal::service('stream_wrapper_manager')->getViaUri($avatar)) {
			$avatar = $wrapper->getExternalUrl();
		}
		$slider .= '<li>
		<div class="bc_main">
		<div class="bc_title">'.$title.'</div>
		<div class="bc_body">'.$body.'</div>
		<div class="bc_image"><img src="'.$avatar.'"></div>
		</div></li>';
	}
    $slider .= '</ul></div></section></div></div>';
	return array(
      '#type' => 'markup',
      '#markup' => $slider,
    );
  }
}
