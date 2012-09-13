<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>

	<meta name="author" content="The MegaMindz" />
	<meta charset="UTF-8" />
	<title>The Mega Mindz<?= isset($title) ? " - $title" : null ?></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/blitzer/jquery-ui.css"/>
	<?= Casset::render_css() ?>

  </head>
  <body>
	<div id="wrapper">

		<div id="main">
			
			<div id="logo">
			<h1>
				<?= Html::anchor('/', Asset::img('mmz.png', array('alt' => 'logo', 'width' => '90', 'height' => '90'))) ?>
			</h1>
			</div>

			<nav>
				<ul>
					<li><?= Html::anchor('/', 'Home') ?></li>
					<li><?= Html::anchor('media', 'Media' ) ?></li>
					<li><?= Html::anchor('instrumentals', 'Instrumentals' ) ?></li>
					<li><?= Html::anchor('aboutus', 'About Us' ) ?></li>
					<li><?= Html::anchor('contact', 'Contact' )?></li>
				</ul>
			</nav>

			<?= isset($content) ? $content : null ?>
			
		</div><!--Main -->

	</div><!--Wrapper  -->

	<footer>
		<p id="divider">The MegaMindz &copy; 2012 </p>
		<p> <a href="copy.html">Legal &amp; copyright </a></p>
	</footer>

	<?= Casset::render_js() ?>
  
  </body>
</html>
