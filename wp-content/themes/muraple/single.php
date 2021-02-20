<?php get_header('page'); the_post();?>
<!-- Main -->
<main>
    <!-- Home Banner -->
    <div class="single-post">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12" >
                    <h1 class="entry-title"><?php the_title() ?></h1>
                    <div class="meta">
                        <span class="category"><?php the_category( ', ') ?></span>
                        <span class="date"><?php the_time('j F Y') ?></span>
                        <span class="comments"><?php comments_number('0', '1', '%'); ?></span>
                        <span class="views"><?php if(function_exists('the_views')) { the_views(); } ?></span>
                        <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                    </div>

                    <?php the_content() ?>
                    <div class="tagList">
                        <div class="tagLine">
                            <?php if( has_tag() ){
                                global $post;
                                foreach(get_the_tags($post->ID) as $tag): ?>
                                    <div class="tagItem">
                                        <?php echo '<a href="' . get_tag_link($tag->term_id) . '">' . '#' . $tag->name . '</a>'; ?>
                                    </div>
                                <?php endforeach;
                            }
                            ?>
                        </div>
                        <div class="tagShare">
                            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Single post -->
</main>
<!-- End Main -->
<?php get_footer() ?>