<?php get_header(); ?>
<main class="space-y-10 animate-fadeInUp">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article class="flex gap-6 items-start">
                <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="flex-shrink-0">
                        <?php the_post_thumbnail('medium', ['class' => 'rounded-lg w-96 h-auto object-cover']); ?>
                    </a>
                <?php endif; ?>

                <div>
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </article>
        <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>