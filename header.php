<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-faded">
        <div class="container">
            <a class="navbar-brand" href="http://users.metropolia.fi/~aleksr/wp_projekti/">Header</a>
        </div>
    </nav>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7ebfcf3d25371215c25f/d920fbc1e09a0ab3c31acbcde1a63697/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://trello-attachments.s3.amazonaws.com/587dd2f3c4ef0b80fbe11bf5/589d7eef3a9111557ce708d8/3c35e61ccd27e6879fa931e1be4df035/carousel2.jpg" alt="Second slide">
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