<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>

</div>
<!-- END CONTENT -->

<?php get_footer(); ?>