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
                <div class="row mostviewed">
                    <div class="col-12 mwheader">
                        <h4 class="activeheader singlepost">
                            <a href="http://users.metropolia.fi/~aleksr/wp_projekti/category/most-viewed">Most viewed</a>
                        </h4>
                    </div>
                    <?php wpp_get_mostpopular('post_type="post"&wpp_start=" "&wpp_end" "&thumbnail_width=251&thumbnail_height=300&limit=8&range="all"&post_html="<div class=\'col\'><a href=\'{url}\'><article class=\'card\'>{thumb_img}<div class=\'card-img-overlay\'><h6 class=\'card-title\'>\'{text_title}\'</h6></div></article></a></div>"'); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>