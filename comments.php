<?php
if (post_password_required()) {
    return;
} ?>

<section id="comments" class="comments-area">

    <?php if (have_comments()): ?>
        <div>
            <h3>
    <?php
    $count = get_comments_number();
    printf(
        esc_html(_n(
            '%s Comment',
            '%s Comments',
            $count,
            'textdomain'
        )),
        number_format_i18n($count)
    );
    ?>
</h3>


            <ol class="comment-list space-y-6">
                <?php wp_list_comments([
                    "style" => "ol",
                    "avatar_size" => 0,
                    "short_ping" => true,
                    "callback" => function ($comment, $args, $depth) {
                        ?>
                    <li <?php comment_class(
                            "border-b border-gray-200 pb-4"
                        ); ?> id="comment-<?php comment_ID(); ?>">
                        <div class="text-sm text-gray-600 mb-1">
                            <?php comment_author(); ?> |
                            <time datetime="<?php comment_time("c"); ?>">
                                <?php echo get_comment_date(); ?>, <?php echo get_comment_time(); ?>
                            </time>
                        </div>
                        <div class="text-base text-gray-800 leading-relaxed">
                            <?php comment_text(); ?>
                        </div>
                    </li>
                    <?php
                    },
                ]); ?>
            </ol>
        </div>

        <?php the_comments_pagination(); ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()): ?>
        <p class="no-comments"><?php _e(
            "Yorumlar kapalı.",
            "textdomain"
        ); ?></p>
    <?php endif; ?>

    <?php comment_form([
        "logged_in_as" => "",
        "fields" => [
            "author" => sprintf(
                '<input placeholder="%s" name="author" type="text" required>
                <input placeholder="%s" name="email" type="email" required>',
                esc_attr(__("Name", "default")),
                esc_attr(__("Email", "default"))
            ),
        ],
        "comment_field" => sprintf(
            '<textarea name="comment" placeholder="%s" required></textarea>',
            esc_attr(__("Comment", "default"))
        ),
        "must_log_in" => "",
        "submit_button" =>
            '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
        "submit_field" => '%1$s %2$s',
    ]); ?>

</section>