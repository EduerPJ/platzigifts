<?php get_header(); ?>
    <main class="container my-3">
        <?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <h1 class="my-3"><?php the_title() ?></h1>
        <div class="row my-5">
            <div class="col-md-6 col-12">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="col-md-6 col-12">
                <?php the_content(); ?>
            </div>
        </div>
        <?php get_template_part('template-parts/post', 'navigation'); ?>
    <?php
    }
}?>
    </main>
<?php get_footer(); ?>
