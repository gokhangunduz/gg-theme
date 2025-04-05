<footer
    class="flex flex-col text-color transition-all-500 gap-3 items-center justify-center h-[var(--footer-height)] wrapper border-y border-color-500 animate-fadeInUp">

    <p class="flex gap-1 text-2xl text-color">
        <?php getBlogTitle(); ?>
    </p>

    <p><?php echo get_bloginfo('description'); ?></p>

    <p class="text-xs text-color-600">&copy; <?php echo date("Y"); ?> • <?php bloginfo("name"); ?></p>
</footer>
<canvas id="canvas"></canvas>
</body>
<?php wp_footer(); ?>

</html>