<?php get_header(); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide hidden-md-down" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7ebfcf3d25371215c25f/d920fbc1e09a0ab3c31acbcde1a63697/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/58b54f09f57bb2fa9105a293/0ba49a3e31eb9963c6c878e938984b6d/carousel5.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7eea61fb6b71bdfeea6a/5cedb1fd9f085f1a78e7abc6f3223de1/carousel3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7f78ffe06ef9f643fe21/8f1991bfb2e85713777059cfd158e0be/carousel4.jpg" alt="Fourth slide">
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 sidebarmenu">
                <?php get_sidebar(); ?>
            </div>
            <main class="col col-lg-8">
                <div class="row thumbnails">
                    <div class="col-lg-6">
                        <h3><?php echo get_queried_object()->name; ?></h3>
                    </div>
                    <div class="col-lg-6 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row articles">
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