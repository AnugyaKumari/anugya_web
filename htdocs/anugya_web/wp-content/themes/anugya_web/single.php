<?php /* Template Name: single */ ?>
<?php get_header();?>
<div class="bannersingle">
      <div class="container">
        <h4><?php the_field('bannner_head'); ?><?php the_post_thumbnail();?></h4>
      </div>
    </div>
    <div class="single_post">
<div class="container">
    <div class="row">
        <div class="col-md-7">
        <a href="javascript:history.back(1)" class="back" rel="noopener">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assests/image/maxresdefault.jpg" alt="" class="img-fluid">BACK TO BLOG
                </a>
            <h2 class="title"><?php the_title(); ?></h2>
            <div class="content">
                <?php echo $post->post_content;?>
            </div>
            <div class="comment_session">
                <h5>Leave a reply</h5>
                <span class="line"></span>
                <div class="comments">
                    <?php comment_form();?>
                </div>
            </div>
        </div>
        <div class="col-md-5">
        <div class="featured">
            <h5>FEATURED POSTS</h5>
            <div id="featured" class="featured_post">
            <?php
            query_posts('posts_per_page=3&cat=1'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h6><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></h6>
            <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>
            </div>
                        </div>
            <div class="category">
                <h5>CATOGERIES</h5>
            <?php         
                foreach (get_categories(array('hide_empty'=>false)) as $category)
                {
                echo '<div class="labelline"><li><a href="'. get_bloginfo('wpurl') .
                '/category/' . $category->category_nicename . '/"><h6>'.$category->cat_name.'</h6></a></div>';
                
                }
                ?>
            </div>
            
                    </div>
    </div>
</div>
</div>
<?php get_footer();?>