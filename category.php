<?php get_header(); ?>
        <div class="row">
            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
            <main class="col-8">
                <div class="row">
                    <div class="col-6">
                        <h3><?php echo get_queried_object()->name; ?></h3>
                    </div>
                    <div class="col-6 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $id = get_queried_object()->term_id;
                        $artikkelit = get_posts(array('category' => $id, 'numberposts' => 999));
                        foreach($artikkelit as $artikkeli):
                    ?>
                    
                    <a href="<?php echo get_permalink($artikkeli->ID); ?>">
                        <article class="card">
                            <?php echo get_the_post_thumbnail($artikkeli->ID, 'thumbnail'); ?>
                            <div class="card-img-overlay">
                                <h6 class="card-title">
                                    '<?php echo $artikkeli->post_title; ?>'
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