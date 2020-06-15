
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