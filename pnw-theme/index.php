<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('description');?>|<?php bloginfo('name');?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<!--Start WP Head-->
<?php wp_head(); ?>

<!--End WP Head-->
</head>

<!-- X -->


<body <?php body_class();?>>

<div id="wrapper"><!--open wrapper-->

<header>

<a href="index.php">
<img id="logo" src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Logo"></a>


</header>
<!--Begin Nav-->

<nav>
<ul>
<li><a href="">HOME</a></li>
<li><a href="">ABOUT</a></li>
<li><a href="">PLACES</a></li>
<li><a href="">STUFF</a></li>
<li><a href="">CONTACT</a></li>


</ul>

</nav> <!--Close Nav-->




<!--Begin New Navigtion-->




<!--End New Navigtion-->

<section>
<?php if(have_posts()) : while(have_posts()) : the_post();// start the loop ?>
<h1><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
<? endwhile; endif;// end loop?>

</section>
<aside>
<h3>HEADLINE 1</h3>
<p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus."</p>
</aside>
</div><!--Close Wrapper-->

<?php wp_footer();?>
</body>


<footer>
<ul><li>Copyright, 2014 &copy;</li>
<li>All Rights Reserved</li>
<li> <a href="">Web Design By Janelle</a></li>
</ul>

</footer>


</html>
