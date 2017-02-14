<?php get_header(); ?>
        <div class="row">
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-6">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                                <h3 class="pictitle">'<?php the_title(); ?>'</h3>
                            <?php endwhile ?>
                        <?php endif ?>
                    </div>
                    <div class="col-6 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row artikkeli">
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile ?>
                    <?php endif ?>
                </div>
                <div class="row">
                    <?php
                        $uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '12'));
                        foreach($uudet_artikkelit as $artikkeli):
                    ?>
                    
                    <a href="<?php echo get_permalink($artikkeli['ID']); ?>">
                        <article class="card">
                            <?php echo get_the_post_thumbnail($artikkeli['ID'], 'thumbnail'); ?>
                            <div class="card-img-overlay">
                                <h6 class="card-title">
                                    '<?php echo $artikkeli['post_title']; ?>'
                                </h6>
                            </div>
                        </article>
                    </a>
                    
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>