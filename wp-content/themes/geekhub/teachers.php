<?php
/*
Template Name: Teachers
*/
?>
<?php get_header(); ?>
<div id="wrapper">
	<div id="content">
				<h2 class="slogan">
					<?php $obj = get_post_type_object( 'teachers' );
						echo $obj->labels->name;
					?>
				</h2>
				<ul>
					<?php query_posts( array( 'post_type' => 'teachers', 'showposts' => 10 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li id="post-<?php the_ID();?>">
									<h3> 
										<?php the_title(); ?> 
										<span><?php the_field('specialization'); ?></span>
									</h3>
									<?php if (has_post_thumbnail()){
										the_post_thumbnail();
									}?>
									<?php the_content(); ?>
							</li>
					<?php endwhile; endif; wp_reset_query(); ?>
				</ul>
	</div>
<?php get_footer(); ?>