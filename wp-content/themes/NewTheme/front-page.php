<?php
//Template name:anugya singh

?>
<?php get_header();?>
<?php $hero = get_field('hero'); ?>
<div class="body">
<div class="container">
<div class="row rr">
<div class="col-md-6">   
        <?php
            $args = array( 'post_type' => 'post', 'posts_per_page' => -1 , 'order'=>'ASC');
            $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="main-heading"><h1><?php get_field('text3'); ?></h1></div>   
        <div class="posts">
            <div class=" pp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/original.jpg" width="auto" height="180px" alt="img">
            </div>
        
        <div class="para">
            <h3> <?php the_title(); ?></h3>
            <?php the_content(); ?>
     
            <ul class="grp">
                <li class="list-group-item cia1"><i class="fas fa-user"><?php the_author_posts_link(); ?></i></li>
                
                <li class="list-group-item cia1"><i class="fas fa-clock"><?php the_time('M j, Y'); ?></i></li>
                
                <li  class="list-group-item cia1"><a href="<?php comments_link(); ?>"><i class="fas fa-eye"></i></a></li>
                <?php comments_number(''); ?>
            </ul>
        </div> <!---para--->   
        </div>  <!---post--->
       
        
<?php wp_reset_postdata(); ?>
        <?php endwhile;
        wp_reset_postdata();
        else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>  <!---col-md-6--->
<div class="col-md-6 blog1">
<?php get_sidebar();?>
</div><!---col-md-6--->

</div>  <!--row--->
</div>   <!--body--->
</div>   <!--container--->
<?php get_footer();?>

            

