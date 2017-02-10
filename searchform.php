<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input value="<?php the_search_query(); ?>" name="s" id="s" type="text" placeholder="Search" class="search-field">
    <button id="searchsubmit" value="Search" type="submit" class="sininen"><i class="fi-magnifying-glass large"></i></button>
</form>