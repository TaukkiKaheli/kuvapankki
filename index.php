<?php
get_header();
?>
        <div class="row">
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-8">
    <?php
    if (have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
    ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>