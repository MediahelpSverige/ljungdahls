<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="searchbar">
        <input type="text" value="<?php echo get_search_query(); ?>" placeholder="Sök bland all våra tjänster" name="s" id="s" />
            <button type="submit" id="searchsubmit" class="">
                <i class="fa fa-search"></i>
            </button>
            
    </div>
</form>