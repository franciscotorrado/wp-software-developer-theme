<?php get_header(); ?>
<div class="row">
    <!-- Posts -->
    <div class="col-lg-9">

        <h3 class="bg-primary text-white py-3 mb-5 text-center">Search results</h3>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Post -->
            <div class="card-body">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </div>
            <!-- Post -->
		<?php endwhile; ?>
		<?php else: ?>
            <h5>No results found for terms:
				<?php printf( esc_html( '%s' ), get_search_query() ) ?></h5>
			<?php get_search_form(); ?>
		<?php endif; ?>
        <!-- Pagination -->
        <div class="card-body">
			<?php get_template_part( 'template-parts/content', 'pagination' ) ?>
        </div>
        <!-- /Pagination -->

    </div>
    <!-- /Posts -->

    <!-- Side Menu -->
	<?php get_sidebar(); ?>
    <!-- /Side Menu -->
</div>
</div>
<!-- /Blog -->

<?php get_footer(); ?>
