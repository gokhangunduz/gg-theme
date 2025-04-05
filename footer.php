<footer
    class="flex flex-col text-color transition-all-500 gap-3 items-center justify-center h-48 wrapper animate__animated animate__fadeInUp">

    <p class="flex gap-1 text-2xl">
        <?php getBlogTitle(); ?>
    </p>

    <p>Software Developer</p>

    <p class="text-xs">&copy; <?php echo date("Y"); ?> • <?php bloginfo(
            "name"
        ); ?></p>
</footer>
</body>
<?php wp_footer(); ?>

</html>