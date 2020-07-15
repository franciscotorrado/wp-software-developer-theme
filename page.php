<?php get_header(); ?>
<?php get_template_part( 'template-parts/page/content', 'page-developer-header' ) ?>
<div class="row">
	<!-- Posts -->
	<div class="col-lg-12">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Post -->
			<div class="card-body">
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
				<p class="small mb-0"><?php the_time( get_option( 'date_format' ) ); ?></p>
				<p class="small mb-0"><?php the_author(); ?></p>
				<p class="small">Categories: <?php the_category( ' / ' ) ?> Tags: <?php the_tags( '', ' / ', '' ) ?></p>
				<!-- Featured Image -->
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'post-thumbnails', array(
						'class' => 'img-fluid mb-3'
					) );
				}
				?>
				<!-- /Featured Image -->
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">More info</a>
			</div>
			<!-- Post -->
		<?php endwhile; endif; ?>
		<!-- Pagination -->
		<div class="card-body">
			<?php get_template_part( 'template-parts/content', 'pagination' ) ?>
		</div>
		<!-- /Pagination -->

	</div>
	<!-- /Posts -->
</div>
</div>
<!-- /Blog -->

<?php get_footer(); ?>
