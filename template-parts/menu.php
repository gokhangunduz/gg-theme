<div id="menu-overlay" class="hidden fixed inset-0 z-40 bg-dark/50"></div>

<nav id="menu"
    class="hidden fixed top-0 right-0 h-screen p-10 z-50 shadow-lg flex flex-col justify-between bg-white dark:bg-gray-900">

    <!-- Blog Başlığı -->
    <h1 class="flex gap-0.5 text-xl mb-8">
        <?php getBlogTitle(); ?>
    </h1>

    <!-- Menü Listesi -->
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => 'ul', // Menü için container belirtiyoruz
        'menu_class' => 'flex flex-col gap-4 items-center mb-6', // Menü listesi için stil sınıfı
        'link_class' => 'text-xl font-semibold hover:underline hover:underline-offset-4' // Bağlantılar için stil
    ));
    ?>

    <!-- Footer -->
    <div class="flex flex-col items-center gap-4 text-center text-sm text-gray-600 dark:text-gray-300">
        <span><?php echo date('Y'); ?> • Gökhan Gündüz</span>
        <span>v1.0.0 • production</span>
    </div>

</nav>