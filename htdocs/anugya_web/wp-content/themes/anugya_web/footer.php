
<div class="icon">
	
				<a href="" class="env"><i class="far fa-envelope" aria-hidden="true"></i><?php the_field('text1'); ?></i></a>
				<a href="" class="phn"><i class="fas fa-phone-volume"></i><?php the_field('text2'); ?></a>
	<ul class="icons">
		
                <li><a class="ss" href="<?php echo $media['media_icon1']; ?>"><i class="fab fa-facebook-f a"></i></a></li>
                <li><a class="ss" href=" <?php echo $media['media_icon2'];?>"><i class="fab fa-twitter a"></i></a></li>
                <li><a class="ss" href="<?php echo $media['media_icon4'];?>"><i class="fab fa-linkedin-in a"></i></a></li>    </ul>
	</ul>
</div>
<!----Footer Nav Menu--------->


<div class = "site-nav">
<div class="foot_nav">
	<?php 
		$args=array(
		'theme_location' => 'footer'
	);
	?>
	<?php wp_nav_menu($args); ?>
</div>
</div>
<div class="footer-copy"><?php the_field('tag1'); ?></div>
<?php wp_footer();  ?>

</body>
</html>