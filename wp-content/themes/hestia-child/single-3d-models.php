<?php

/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action('hestia_before_single_post_wrapper');
?>

<div class="<?php echo hestia_layout(); ?> model-3d-page">
    <div class="blog-post blog-post-wrapper">
        <div class="container">
            <div class="sketchfab-embed-wrapper">
                <?php
                    $link = get_field('link');
                    if(!empty($link)):
                ?>
                    <iframe
                    class="model-object-3d" 
                    title="<?php echo get_the_title(); ?>" 
                    frameborder="0"
                    allowfullscreen 
                    mozallowfullscreen="true" 
                    webkitallowfullscreen="true" 
                    allow="autoplay; fullscreen; xr-spatial-tracking"
                    xr-spatial-tracking execution-while-out-of-viewport
                    execution-while-not-rendered 
                    web-share src="<?php echo $link?>/embed"></iframe>
                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"></p>
                    <?php endif ?>
            </div>
            <div><?php the_content(); ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>