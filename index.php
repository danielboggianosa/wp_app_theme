<?php get_header(); ?>

    <h1 class="text-secondary">
        <?php single_cat_title() ?>
    </h1>

<div class="row">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="card shadow mb-4 col-md-4">
    <?php if(has_post_thumbnail()):?>
        <div class="card-image">
            <img src="<?php the_post_thumbnail_url( 'blog_card' ) ?>" class="w-25" alt="true">
        </div>
    <?php endif;?>
        <div class="card-body">
            <h3><?php the_title() ?></h3>
            <?php the_excerpt(); ?>
        </div>
        <div class="card-footer">
            <a href="<?php the_permalink() ?>" class="text-primary">Seguir leyendo...</a>
        </div>
    </div>
<?php endwhile; endif;?>
</div>
</div>


<?php get_footer(); ?>