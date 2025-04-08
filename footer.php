<footer class="flex flex-col gap-3 items-center justify-center ">

    <p class="flex gap-1 text-2xl">
        <?php getBlogTitle(); ?>
    </p>

    <p><?php echo get_bloginfo("description"); ?></p>

    <p class="text-xs">&copy; <?php echo date("Y"); ?> • <?php bloginfo(
            "name"
        ); ?></p>
</footer>
<canvas id="canvas"></canvas>
</body>
<?php wp_footer(); ?>

</html>