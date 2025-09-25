





<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">



 <input type="text" class="search_input"

 placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"

 value="<?php echo get_search_query() ?>" name="s"

 title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

 

 <button type="Submit" class="search_icon hide-btn "  alt="Submit search query" ><i class="fa fa-search"></i></button>
 
 <button type="button" class="search_icon show-btn" id="clickmobile" alt="Submit search query" ><i class="fa fa-search"></i></button>

</form>







<!-- <input class="search_input" type="text" name="" placeholder="Search...">

            <a href="#" class="search_icon"><i class="fa fa-search"></i></a> -->