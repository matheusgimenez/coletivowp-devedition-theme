<?php
$page = get_page_by_path( 'my-portfolio', OBJECT, 'page' );
$args = array(
	'post_type'	=> 'page',
	'post__in'	=> array( $page->ID )
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();?>
		<div class="content" id="my-portfolio">
			<div class="container">
				<?php do_action('onepress_section_before_inner', 'featuredpage'); ?>
							<div class="section-title-area">
								<h2 class="section-title"><?php the_title(); ?></h2>
									<div class="section-desc">
										<?php the_content();?>
									</div>
							</div>
				</div>
		</div>
<?php endwhile;?>
<?php wp_reset_postdata();?>
<?php endif;?>
