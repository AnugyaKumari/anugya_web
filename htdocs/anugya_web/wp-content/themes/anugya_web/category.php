<?php get_header(); ?> 
 
<section>
<div class="container">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="repeater_session">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<!-- <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="entry">
<?php the_content(); ?>
</div> -->
<div class="container">
<article class="blog">
<div class="row">
<div class="col-md-6">
    <?php the_post_thumbnail();?>
    </div>
    <div class="col-md-6">
        <div class="blog_content">
          
                <div class="blog_data">
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p><?php
                 echo $post->post_content;
                ?></p>
                </div>
                </div>
                <!--<span>
                <img class="source"src="<?php echo get_stylesheet_directory_uri(); ?>\Assests\image\maxresdefault.png" alt="">
                Holdfolio</span>-->
        </div>
        </div>
            </article>
            </div>
<?php endwhile; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>