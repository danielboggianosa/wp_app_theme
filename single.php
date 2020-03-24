<?php get_header(); ?>
    <h5>Esto es un post</h5>
    <h1 class="text-secondary"><?php the_title() ?></h1>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>