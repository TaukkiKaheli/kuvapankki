<?php get_header(); ?>
        <div class="row">
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-12 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile ?>
                    <?php endif ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>