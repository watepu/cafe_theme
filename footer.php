<footer>
        <p>Watepu Cafe all right reserved</p>
        </footer>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery-3.3.1.min.js"></script>
<script>
    $(function() {
    $('.toggle').click(function() {
        $(this).toggleClass('active');
 
        if ($(this).hasClass('active')) {
            $('.header-mobile-menu').addClass('active');
        } else {
            $('.header-mobile-menu').removeClass('active');
        }
    });
});
    </script>
    <?php wp_footer(); ?>
    </body>
</html>