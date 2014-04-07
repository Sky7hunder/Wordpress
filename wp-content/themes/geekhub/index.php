<?php get_header(); ?>

		<div id="wrapper">
			<div id="content">
				<?php
				if ( is_home() ) {
					?><p class="about-geekhub"><?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?></p><?php
				} else {
				
				}?>
				<h2>
					<?php $obj = get_post_type_object( 'courses' );
						echo $obj->labels->name;
					?>
				</h2>
				<ul	id="courses">
					<?php query_posts( array( 'post_type' => 'courses', 'showposts' => 10 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li id="post-<?php the_ID();?>">
								<?php if (has_post_thumbnail()){
									the_post_thumbnail();
								}?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								<?php the_content(); ?>
							</li>
					<?php endwhile; endif; wp_reset_query(); ?>
				</ul>
				<div id="contacts-wrap">
					<ul id="contacts">
						<li class="like-box">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : endif; ?>
						</li>
						<li class="container">
							<a href="#" title="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/sertificates-banner.png" alt="#"/>
							</a>
						</li>
						<li class="container sponsors">
							<h3>
								<?php $obj = get_post_type_object( 'sponsors' );
									echo $obj->labels->name;
								?>
							</h3>
							<ul>
								<?php query_posts( array( 'post_type' => 'sponsors', 'showposts' => 10 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li id="post-<?php the_ID();?>">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php if (has_post_thumbnail()){
												the_post_thumbnail();
											}?>
										</a>
									</li>
								<?php endwhile; endif; wp_reset_query(); ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
<?php get_footer(); ?>