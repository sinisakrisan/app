<?php get_header(); ?>
    <div id="wrapper">
        <?php get_sidebar(); ?>
            <div id="main">
                <?php get_template_part('navbar'); ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm my-3">
                              <header class="mb-4 border-bottom">
                                <h1><?php _e('Category: ', 'app'); echo single_cat_title(); ?></h1>
                              </header>
                                <?php get_template_part('loops/index-loop'); ?>
                            </div>

                           
                             <?php get_template_part('sidebar-right'); ?>
                            
                        </div>
                    </div>

<?php get_footer(); ?>
