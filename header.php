<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="#">Responsive header</a>
    </nav>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/1500x400" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="..." alt="Third slide">
            </div>
        </div>
    </div>
    
    <div class="container">