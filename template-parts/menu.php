<div id="menu-overlay" class="hidden fixed inset-0 z-40 bg-dark/75"></div>

<nav id="menu" class="hidden fixed top-0 right-0 h-screen p-10 z-50 shadow-lg flex flex-col justify-between ">

    <h1 class="flex items-center justify-center gap-0.5 text-xl">
        <?php getBlogTitle(); ?>
    </h1>

    <div class="flex items-center justify-center">
        <?php
        $locations = get_nav_menu_locations();

        if (isset($locations["main-menu"])) {
            $menu_id = $locations["main-menu"];
            $menu_items = wp_get_nav_menu_items($menu_id);

            if ($menu_items): ?>
                <ul class="flex flex-col gap-4">
                    <?php foreach ($menu_items as $item): ?>
                        <li>
                            <a href="<?php echo esc_url($item->url); ?>"
                                class="text-lg font-semibold text-layer-dark-900 dark:text-layer-light-50 hover:underline hover:underline-offset-4 transition-all duration-500">
                                <?php echo esc_html($item->title); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif;
        }
        ?>
    </div>

    <div class="flex flex-col items-center gap-4 text-center text-sm ">
        <p class="text-xs">&copy; <?php echo date("Y"); ?> • <?php bloginfo(
                "name"
            ); ?></p>
    </div>

</nav>