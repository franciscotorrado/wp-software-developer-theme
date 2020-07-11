<?php get_header(); ?>
<div class="row">
    <!-- Posts -->
    <div class="col-lg-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Post -->
            <div class="card-body">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <p class="small mb-0"><?php the_time(get_option('date_format')); ?></p>
                <p class="small mb-0"><?php the_author(); ?></p>
                <p class="small">Categories: <?php the_category(' / ') ?> Tags: <?php the_tags('', ' / ', '') ?></p>
                <!-- Featured Image -->
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3'
                    ));
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
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <!-- /Pagination -->

    </div>
    <!-- /Posts -->

    <!-- Side Menu -->
    <div class="col-lg-3">
        <div class="card-body">
            <h4>Advertisement</h4>
            <hr>
            <img src="img/sideimage.jpg" alt="" class="img-fluid">
        </div>
    </div>
    <!-- /Side Menu -->
</div>
</div>
<!-- /Blog -->

<?php get_footer(); ?>
