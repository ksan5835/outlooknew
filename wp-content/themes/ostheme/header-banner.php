<?php
/**
 * Common Header Banner
 */
?>
<?php $featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
<section id="hero-unit" class="clearfix">

    <div>
    <?php if($featuredimageurl): ?>
	<img src="<?php echo$featuredimageurl; ?>" alt="<?php bloginfo( 'name' ); ?>-Banner" class="headerbanner">  
    <?php else: ?>
	<img src="<?php echo get_template_directory_uri() . '/includes/images/banner.jpg'?>" alt="<?php bloginfo( 'name' ); ?>-Banner">
    <?php endif; ?>
    
    </div>
	</section>
