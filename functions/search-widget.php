<?php
/**!
 * Search form in widget
 */

if ( ! function_exists('app_search_form') ) {

  function app_search_form( $form ) {
    $form = '<form class="form-inline mb-3" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
      <input class="form-control mr-sm-1" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'app') . '..." name="s" id="s" />
      <button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'app') .'" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>';
    return $form;
  }
}
add_filter( 'get_search_form', 'app_search_form' );