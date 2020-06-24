<div class="container con">

<?php get_header(); ?> 

 </div>
<section>
<div class="row">
<div class="col-md-7">
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
<div class="block">
<div class="row">
<div class="col-md-6 photo">
    <?php the_post_thumbnail();?>
    </div>
    <div class="col-md-6 head">
        <div class="blog_content">
          
                <div class="blog_data">
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p><?php
                 echo $post->post_content;
                ?></p>
                </div>
                </div>
        </div>
        </div>
        </div>
            </div>
<?php endwhile; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
</div>
</div>
</div>

<div class="col-md-5 side">
<?php get_sidebar();?>
</div>
</div>
</section>

<?php get_footer(); ?>