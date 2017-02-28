<?php get_header(); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7f78ffe06ef9f643fe21/8f1991bfb2e85713777059cfd158e0be/carousel4.jpg" alt="Third slide">
            </div>
        </div>
    </div>
    
    <div class="container">

        <div class="row">
            <div class="col-4">
                <?php get_sidebar(); ?>
                <div class="jumbotron jumbotron-fluid">
                    <a href="http://users.metropolia.fi/~aleksr/wp_projekti/cloudy-sky-full-of-stars/" class="jlink">
                        <div class="container">
                            <h2 class="jumboheader">EDITOR'S CHOICE</h2>
                            <img src="http://users.metropolia.fi/~aleksr/wp_projekti/wp-content/uploads/2017/02/Cloudy-sky-full-of-stars-686x960.jpg" class="jumbopic">
                            <div class="info" style="margin-bottom: 0">
                                <p class="jspecs"><span class="highlight">Type:</span> JPEG <span class="highlight">| Resolution:</span> 3456x4838 <span class="highlight">| File size:</span> 9.87Mb <span class="highlight">| Focal length:</span> 17mm <span class="highlight">| Exposure:</span> 30s <span class="highlight">| Aperture:</span> f/3.2 <span class="highlight">| ISO:</span> 640</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <main class="col-8">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile ?>
                <?php endif ?>
                <div class="row">
                    <div class="col-3">
                        <h4 class="inactiveheader">
                            <a href="http://users.metropolia.fi/~aleksr/wp_projekti/">Latest</a>
                        </h4>
                    </div>
                    <div class="col-3">
                        <h4 class="activeheader">
                            <a href="http://users.metropolia.fi/~aleksr/wp_projekti/category/most-viewed">Most viewed</a>
                        </h4>
                    </div>
                    <div class="col-6 search-block">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="row articles">
                    <?php wpp_get_mostpopular('post_type="post"&wpp_start=" "&wpp_end" "&thumbnail_width=251&thumbnail_height=300&limit=12&range="all"&post_html="<a href=\'{url}\'><article class=\'card\'>{thumb_img}<div class=\'card-img-overlay\'><h6 class=\'card-title\'>\'{text_title}\'</h6></div></article></a>"'); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>