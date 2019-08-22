<?php
/*
 * Template Name: Person
 * */
?>
<?php get_header(); ?>
<div class="site-blocks-cover overlay" data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail('', ['class' => 'img-fluid rounded mb-5 w-25 rounded-circle']); ?><br>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                    <?php echo get_the_date(); ?>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>