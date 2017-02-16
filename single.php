<?php get_header(); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/58a2eec207b537400219be21/b88439ae9ac70bd14ad2324fc90cc783/banner1.jpg" alt="First slide">
                <div class="container overlaymenu">
                    <?php get_sidebar(); ?>
                    <div class="col-6 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            <main class="col">
                <div class="row" style="border-bottom: 1px solid rgba(25,150,190,0.8);">
                    <div class="col-6">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                                <h3 class="pictitle">'<?php the_title(); ?>'</h3>
                            <?php endwhile ?>
                        <?php endif ?>
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
                        $uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '8'));
                        foreach($uudet_artikkelit as $artikkeli):
                    ?>
                    
                    <div class="col">
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
                    </div>
                    
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>