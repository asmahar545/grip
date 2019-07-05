<?php
/**
 * Created by ra.
 * Date: 10/23/2015
 */

global $post;

if ( td_util::is_amp() ) {
    get_header('amp');
} else {

	//increment the views counter
	td_page_views::update_page_views($post->ID);

    get_header();
}

if (have_posts()) {

	td_global::load_single_post($post);
	$td_mod_single = new td_module_single_mob($post);

	?>

	<div class="td-container">

	    <!-- breadcrumbs -->
	    <div class="td-crumb-container"><?php echo td_page_generator_mob::get_single_breadcrumbs($td_mod_single->title); ?></div>

	    <!-- post content -->
	    <?php the_post(); ?>

	    <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
		    <div class="td-post-header">

			    <?php echo $td_mod_single->get_category(); ?>

			    <header class="td-post-title">
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
                   echo '<div class="td-post-author-name multiple-authors"><div class="td-author-by">Par</div>';
                    foreach ($coauths as $key => $coauth) {
                    echo '<a href="grip/author/' . $coauth->user_nicename . '">' . $coauth->display_name . '</a>';
                     }
                    echo '<div class="td-author-line"> - </div></div>';
                    echo 'et';
                 }   else {
                 echo $td_mod_single->get_author();
            };
        }?>
					    <?php //echo $td_mod_single->get_author();?>
					    <?php echo $td_mod_single->get_date(false);?>
					    <?php echo $td_mod_single->get_comments();?>
					    <?php
                            if ( ! td_util::is_amp() )
                             echo $td_mod_single->get_views();
                        ?>
				    </div>
			    </header>

		    </div>

		    <div class="td-post-content">

			    <?php
			    // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
			    if (!empty(td_global::$load_featured_img_from_template)) {
				    echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
			    } else {
					if (TD_THEME_NAME === 'Newsmag') {
						echo $td_mod_single->get_image('td_640x0');
					} else {
						echo $td_mod_single->get_image('td_696x0');
					}
			    }
			    ?>
			    <?php echo $td_mod_single->get_social_sharing_top();?>
			    <?php echo $td_mod_single->get_content();?>
		    </div>

		    <footer>
			    <?php echo $td_mod_single->get_post_pagination();?>
			    <?php echo $td_mod_single->get_review();?>

			    <div class="td-post-source-tags">
				    <?php echo $td_mod_single->get_source_and_via();?>
				    <?php echo $td_mod_single->get_the_tags();?>
			    </div>

			    <?php echo $td_mod_single->get_social_sharing_bottom();?>
			    <?php echo $td_mod_single->get_next_prev_posts();?>
			    <?php echo $td_mod_single->get_author_box();?>
			    <?php echo $td_mod_single->get_item_scope_meta();?>
		    </footer>

	    </article> <!-- /.post -->

	    <?php echo $td_mod_single->related_posts();?>

	</div>

	<?php

} else {
	//no posts
	echo td_page_generator_mob::no_posts();
}

comments_template('', true);

if ( td_util::is_amp() ) {
    get_footer('amp');
} else {
    get_footer();
}
