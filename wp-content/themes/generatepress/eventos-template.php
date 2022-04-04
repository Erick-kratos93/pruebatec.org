<?php
/**
 * Template Name: Eventos Template
 * Description: Page template to display eventos custom post types 
 * underneath the page content
 *
 *
 * @package GeneratePress
 */

get_header(); ?>

<div id="primary" class="site-content">
 <div id="content" role="main">

<?php
do_action( 'generate_after_entry_header' );

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}
		?>

 <?php while ( have_posts() ) : the_post(); ?>
 
 <header class="entry-header">
 <?php the_post_thumbnail(); ?>
 <h1 class="entry-title"><?php the_title(); ?></h1>
 </header>			

 <div class="entry-content">
 <?php the_content(); ?>
 <?php
 $args = array(
 'post_type' => 'eventos_post_type', // enter custom post type
 'posts_per_page' => 3,
 'orderby' => 'date',
 'order' => 'DESC',
 );
 
 $loop = new WP_Query( $args );
 if( $loop->have_posts() ):
 while( $loop->have_posts() ): $loop->the_post(); global $post;
 echo '<div class="eventos_post_type">';
 echo '<h3>' . get_the_title() . '</h3>';
 echo '<div class="eventos_post_type-image">'. get_the_post_thumbnail( $id ).'</div>';
 echo '<div class="eventos_post_type-work">'. get_the_content().'</div>';
 echo '</div>';
 endwhile;
 endif;
 
 ?>

 </div><!-- #entry-content -->
 <?php comments_template( '', true ); ?> 
 <?php endwhile; // end of the loop. ?> 
 </div><!-- #content -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
