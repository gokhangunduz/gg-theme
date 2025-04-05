<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="bg-color transition-all-500">
    <header
        class="flex items-center justify-between h-16 border-b shadow-sm wrapper text-color border-color-300  transition-all-500 animate__animated animate__fadeInDown">

        <a href="<?php echo esc_url(home_url("/")); ?>" <h1 class="flex gap-0.5 text-xl"><?php getBlogTitle(); ?>
            </h1>
        </a>

        <div class="flex items-center gap-4">
            <button class="cursor-pointer" id="theme-toggle">
                toggle
            </button>
            <nav>
                <!-- <?php wp_nav_menu(["theme_location" => "main-menu",]); ?> -->
                menu
            </nav>
        </div>
    </header>