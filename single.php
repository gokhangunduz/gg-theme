<?php get_header(); ?>
<article id="single" class="flex flex-col gap-6">
    <?php if (has_post_thumbnail()): ?>
        <img class="w-full h-96 object-cover object-center rounded-lg" src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="<?php the_title(); ?>" />
    <?php endif; ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</article>

<?php comments_template(); ?>

<?php get_footer(); ?>