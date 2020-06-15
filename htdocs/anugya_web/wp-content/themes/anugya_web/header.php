<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ibex Effect</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" is="style.css" href="http://localhost\anugya_web\wp-content\themes\anugya_web\style.css" type="text/css" media="all">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
		
    <?php wp_head(); ?>

</head>

<body <?php body_class();  ?>>
<div class="container cont">
	<div class="firstlogo">
    	<img src="<?php the_field('my_logo'); ?>">
	
		<a href="" class="envs"><i class="far fa-envelope" aria-hidden="true"></i><?php the_field('text1'); ?></i></a>
        <a href="" class="phns"><i class="fas fa-phone-volume"></i><?php the_field('text2'); ?></a>
	<ul class="icons">
                <li><a class="ss" href="<?php echo $media['media_icon1']; ?>"><i class="fab fa-facebook-f a"></i></a></li>
                <li><a class="ss" href=" <?php echo $media['media_icon2'];?>"><i class="fab fa-twitter a"></i></a></li>
                <li><a class="ss" href="<?php echo $media['media_icon4'];?>"><i class="fab fa-linkedin-in a"></i></a></li>
            </ul>
			</div>	
<!----Nav Menu--------->

<nav class="navbar navbar-expand-md  navbar-light nav">

<div class="collapse navbar-collapse" id="collapsibleNavbar">
<div class = "site-nav">
	<?php 
		$args=array(
		'theme_location' => 'primary'
	);
	?>
	<?php wp_nav_menu($args); ?>

</div>
</div>
</nav>

	<div class="background_img">
		<img class="mat" src="<?php echo get_stylesheet_directory_uri(); ?>/image/rain.png" alt="img"> 
	</div>

</div>
				