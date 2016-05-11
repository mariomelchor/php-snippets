// Post Thumbnail Image to URL
<?php
if ( has_post_thumbnail() ) {
	$feature_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'feature-image' );
	echo '<img src="' . $feature_image_url[0] . '" class="media-fluid border">';
}
?>

// Post Thumbnail Image to URL with anchor
<?php
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
	echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
	the_post_thumbnail( 'thumbnail' );
	echo '</a>';
}
?>

// Post Thumbnail Image w/ default image
<?php if ( has_post_thumbnail()) {
	the_post_thumbnail('post-thumbnail', array( 'class' => 'media-fluid' ));
}	else {
	echo '<img src="'. get_template_directory_uri().'/images/feature/page-feature.jpg" alt="'. get_the_title() .'" class="media-fluid">';
} ?>

// Custom Field Image ID to URL
<?php
$image = get_field('secondary_image');
$size = 'secondary-image';

if( $image ) {
	$secondary_image_url = wp_get_attachment_image_src( $image, $size );
	echo '<img src="' . $secondary_image_url[0] . '" class="media-fluid border">';
}
?>
