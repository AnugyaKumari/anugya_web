
 <!-- <div class="category">
 <div class="hd"><h3>Blog Categories</h3></div>
<?php         
     foreach (get_categories(array('hide_empty'=>false)) as $category)
{
    echo '<div class="labelline"><li class="linkk"><a href="'. get_bloginfo('wpurl') .
    '/category/' . $category->category_nicename . '/"><h6>'.$category->cat_name.'</h6></a></div>';
                
}

?> -->

<div class="cat-text">
      <a href="<?php echo $term_link; ?>"><h4><?php echo $termi->name;?></h4></a>
      <a href="<?php the_permalink();?>"><h6><?php echo $termi->description;?></h6></a>
  </div>

<div class="row">
  <div class="hd"><h3>Blog Categories</h3></div>
  <?php 
    $taxonomy = 'category';
    $postType = 'post';
    $terms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
  ?>
  <?php
  foreach( $terms as $termi ){ 
      $termi_id = $termi->term_id;

      $term_link = get_term_link( $termi );

  ?>
  <img src="<?php echo $image['url']; ?>">
  <div class="category">
      <div class="ssss">
          <div class="cat-image">
      <!-- for displaying img in category -->
        <img class="img-responsive" src="<?php echo get_field('category_image', $taxonomy . '_' . $termi_id); ?>" />
        </div>
        <div class="cat-text">
            <a href="<?php echo $term_link; ?>"><h4><?php echo $termi->name;?></h4></a>
            <a href="<?php the_permalink();?>"><h6><?php echo $termi->description;?></h6></a>
  </div>
  </div>
  </div>
   <?php   
  }
  ?>
<div class="arch">
<div class="ha"><h3>Archives</h3></div>
<?php //add_filter( 'getarchives_where' , 'Cpt_getarchives_where_filter' , 10 , 2 );
wp_get_archives();
//remove_filter('getarchives_where' , 'Cpt_getarchives_where_filter' , 10 );
?>

</div>
