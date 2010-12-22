<?php get_header(); ?>
  
    <div id="content">    
        <?php $entrycounter = 0; ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if ($entrycounter++ > 0) : ?>
                <div class="entryseperator"></div>
            <?php endif; ?>
            <div class="entry">  
                <h3 class="entrytitle" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <div class="entrybody">
                    <div class="entrymeta">
                        <?php the_time('F dS Y') ?> Posted by <?php the_author(); ?> in <?php the_category(',') ?> <?php edit_post_link(__('<strong>Edit</strong>')); ?>
                    </div>
                    <div class="entrycontent">
                        <?php the_content(__('(Read the article)')); ?>
                    </div>
                    <div style="clear: left; line-height: 0; height: 0;"> &nbsp; </div>
                </div>          
                <!-- <?php trackback_rdf(); ?> -->
           </div>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <p style="text-align:center;"><?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?></p>
    </div> <!-- end content -->

<?php get_footer(); ?>





