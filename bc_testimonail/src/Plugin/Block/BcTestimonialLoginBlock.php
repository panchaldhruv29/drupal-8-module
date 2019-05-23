<?php
/**
 * @file
 * Contains \Drupal\bc_testimonial\Plugin\Block\BcTestimonialLoginBlock.
 */
namespace Drupal\bc_testimonial\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "bc_testimonial_login",
 *   admin_label = @Translation("BC Testimonial Login block"),
 *   category = @Translation("Custom Testimonial Login block")
 * )
 */

class BcTestimonialLoginBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
	  $current= \Drupal::currentUser();
	if(!$current->id()){
	    	/*$output = '<div class="page-banner">
				<div class="banner-text">
				<h1>Store</h1>
				<p class="subcopy">Are you a BCTA Member? Log In to receive your member discount!</p>
				<a class="btn btn-login" href="../../../../user/login">Log In</a></div>
				<div class="banner-indent-text">&nbsp;</div>
			</div>';*/
			
			/*$output= '<div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 page-banner-inner">
                <div class="column-inner  bg-size-cover ">
                  <div class="column-content-inner">
                    <div class="column-content page-banner-content "><div class="page-banner">
<div class="banner-text">
<h1>Store</h1>
<p class="subcopy">Are you a BCTA Member? Log In to receive your member discount!</p>
<a class="btn btn-login" href="../../../../user/login">Log In</a></div>
<div class="banner-indent-text">&nbsp;</div>
</div></div>                  </div>  
                                  </div>
              </div>';*/
              $path ='/sites/default/files/gallery/economy-banner.jpg';
              $output ='<div class="gbb-row-wrapper">
    <div class="page-banner-wrapper port-passes-banner store-banner gbb-row bg-size-cover" style="background-image:url('.$path.'); background-repeat:no-repeat; background-position:center top">
    <div class="bb-inner default">  
      <div class="bb-container container">
        <div class="row">
          <div class="row-wrapper clearfix">
                          <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 page-banner-inner">
                <div class="column-inner  bg-size-cover ">
                  <div class="column-content-inner">
                    <div class="column-content page-banner-content "><div class="page-banner">
<div class="banner-text">
<h1>Store</h1>
<p class="subcopy">Are you a BCTA Member? Log In to receive your member discount!</p>
<a class="btn btn-login" href="../../../../user/login">Log In</a></div>
<div class="banner-indent-text">&nbsp;</div>
</div></div>                  </div>  
                                  </div>
              </div>
                
        </div>
      </div>
    </div>
  </div>  
  </div>  
</div>';
	}else{

		/*$output = '<div class="page-banner">
				<div class="banner-text">
				<h1>Store</h1>
				<div class="banner-indent-text">&nbsp;</div>
			</div>';*/			
			/*$output= '<div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 page-banner-inner">
                <div class="column-inner  bg-size-cover ">
                  <div class="column-content-inner">
                    <div class="column-content page-banner-content "><div class="page-banner">
<div class="banner-text">
<h1>Store</h1>
</div>
<div class="banner-indent-text">&nbsp;</div>
</div></div>                  </div>  
                                  </div>
              </div>';*/
                            $output ='<div class="gbb-row-wrapper">
    <div class="page-banner-wrapper port-passes-banner store-banner gbb-row bg-size-cover" style="background-image:url('.$path.'); background-repeat:no-repeat; background-position:center top;">
    <div class="bb-inner default">  
      <div class="bb-container container">
        <div class="row">
          <div class="row-wrapper clearfix">
                          <div class="gsc-column col-lg-12 col-md-12 col-sm-12 col-xs-12 page-banner-inner">
                <div class="column-inner  bg-size-cover ">
                  <div class="column-content-inner">
                    <div class="column-content page-banner-content "><div class="page-banner">
<div class="banner-text">
<h1>Store</h1>
</div>
<div class="banner-indent-text">&nbsp;</div>
</div></div>                  </div>  
                                  </div>
              </div>
                
        </div>
      </div>
    </div>
  </div>  
  </div>  
</div>';
			
	}
    return array(
      '#type' => 'markup',
      '#markup' => $output,
    );
  }
}
