<?php
// Template 13 - full center title + featured image
// get the global sidebar position from td_single_template_vars.php

load_template( TDC_PATH_LEGACY_COMMON . '/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$td_mod_single = new td_module_single($post);

?>
<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container td-post-template-13">
        <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
            <div class="td-pb-row">
                <div class="td-pb-span12">
                    <div class="td-post-header">
                        <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

                        <?php
                        $tds_post_style_12_title = td_util::get_option('tds_post_style_12_title');

                        // ad spot
                        echo td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'post_style_12', 'spot_title' => $tds_post_style_12_title));
                        ?>

                        <header class="td-post-title">
                            <?php echo $td_mod_single->get_category(); ?>
                            <?php echo $td_mod_single->get_title();?>


                            <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                                <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                            <?php } ?>


                            <div class="td-module-meta-info">
                          <?php
            if (td_util::get_option('tds_p_show_author_name') != 'hide') {
              //echo $td_mod_single->get_author();
             $coauths = get_coauthors();
        if (count($coauths) > 1) {
            echo '<div class="td-post-author-name multiple-authors"><div class="td-author-by">By</div>';
            foreach ($coauths as $key => $coauth) {
            echo '<a href="grip/author/' . $coauth->user_nicename . '">' . $coauth->display_name . '</a>';
            }
            echo '<div class="td-author-line"> - </div></div>';
            echo 'et';
        }   else {
            echo $td_mod_single->get_author();
    };
}?>
                                <?php // echo $td_mod_single->get_author();?>
                                <?php echo $td_mod_single->get_date(false);?>
                                <?php echo $td_mod_single->get_views();?>
                                <?php echo $td_mod_single->get_comments();?>
                            </div>

                        </header>

                        <?php echo $td_mod_single->get_social_sharing_top();?>
                    </div>
                </div>
            </div> <!-- /.td-pb-row -->

            <div class="td-pb-row">
                <?php

                //the default template
                switch ($loop_sidebar_position) {
                    default:
                        ?>
                            <div class="td-pb-span8 td-main-content" role="main">
                                <div class="td-ss-main-content">
                                    <?php
                                    require_once('loop-single-13.php');
                                    comments_template('', true);
                                    ?>
                                </div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                                <div class="td-ss-main-sidebar">
                                    <?php get_sidebar(); ?>
                                </div>
                            </div>
                        <?php
                        break;

                    case 'sidebar_left':
                        ?>
                        <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                require_once('loop-single-13.php');
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
	                    <div class="td-pb-span4 td-main-sidebar" role="complementary">
		                    <div class="td-ss-main-sidebar">
			                    <?php get_sidebar(); ?>
		                    </div>
	                    </div>
                        <?php
                        break;

                    case 'no_sidebar':
                        td_global::$load_featured_img_from_template = 'td_1068x0';
                        ?>
                        <div class="td-pb-span12 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                require_once('loop-single-13.php');
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <?php
                        break;

                }
                ?>
            </div> <!-- /.td-pb-row -->
        </article> <!-- /.post -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php

get_footer();