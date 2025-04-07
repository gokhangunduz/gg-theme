<?php
if (post_password_required()) {
    return;
}
?>

<section id="comments" class="comments-area">

    <?php if (have_comments()): ?>
        <h2 class="comments-title mb-6 text-lg font-semibold">
            <?php
            printf(
                _nx(
                    '%1$s Yorum',
                    '%1$s Yorum',
                    get_comments_number(),
                    'comments title',
                    'textdomain'
                ),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h2>

        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments([
                'style' => 'ol',
                'avatar_size' => 0,
                'short_ping' => true,
                'callback' => function ($comment, $args, $depth) {
                    ?>
                <li <?php comment_class('border-b border-gray-200 pb-4'); ?> id="comment-<?php comment_ID(); ?>">
                    <div class="text-sm text-gray-600 mb-1">
                        <?php comment_author(); ?> —
                        <time datetime="<?php comment_time('c'); ?>">
                            <?php echo get_comment_date(); ?>, <?php echo get_comment_time(); ?>
                        </time>
                    </div>
                    <div class="text-base text-gray-800 leading-relaxed">
                        <?php comment_text(); ?>
                    </div>
                </li>
                <?php
                },
            ]);
            ?>
        </ol>

        <?php the_comments_pagination(); ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()): ?>
        <p class="no-comments"><?php _e('Yorumlar kapalı.', 'textdomain'); ?></p>
    <?php endif; ?>

    <?php
    comment_form([
        'class_form' => 'space-y-6 flex flex-col',
        'class_submit' => 'bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700 transition duration-300 mt-4',
        'logged_in_as' => '',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'fields' => [
            'author' => '<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div><input placeholder="İsim" name="author" type="text" class="w-full border border-gray-300 rounded px-3 py-2" required></div>
                            <div><input placeholder="Email" name="email" type="email" class="w-full border border-gray-300 rounded px-3 py-2" required></div>
                        </div>',
        ],
        'comment_field' => '<div class="grid grid-cols-1 gap-4 mt-4">
                                <textarea name="comment" placeholder="Yorumunuz" class="w-full border border-gray-300 rounded px-3 py-2 min-h-[120px]" required></textarea>
                            </div>',
        'must_log_in' => '',
        'cookies' => false,
    ]);
    ?>

</section>