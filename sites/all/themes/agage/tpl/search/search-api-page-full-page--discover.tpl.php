<?php

/**
 * @file
 * Default theme implementation for displaying a search page.
 *
 * This template renders a page containing a search form and, possibly, search
 * results.
 *
 * Available variables:
 * - $results: The renderable search results.
 * - $form: The search form.
 *
 * @see template_preprocess_search_api_page()
 */
global $base_url;
?>
<div class="mainBanner parallax" id="blog-header" data-background="<?php print $base_url . '/' . drupal_get_path('theme', 'agage'); ?>/images/banners/discovery.png">
	<div class="parallax-overlay bg-strip"></div>
    <div class="container">
      	<div class="banner">
        	<div class="center-content">
          		<p class="text-uppercase"><?php print t('Welcome to our');?></p>
          		<h1 class="text-uppercase"><?php print drupal_get_title(); ?></h1>
          		<div class="discovery-search">
          		<?php print render($form); ?>
          		</div>
        	</div>
      	</div>
    </div>
</div>
<?php print render($results); ?>
