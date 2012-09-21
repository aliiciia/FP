<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>

	<meta name="author" content="The MegaMindz" />
	<meta charset="UTF-8" />
	<title>The Mega Mindz<?= isset($title) ? " - $title" : null ?></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
	<?= Casset::render_css() ?>

	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34963602-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  <body>
	<div id="wrapper">

		<div id="main">
			
			<div id="logo">
			<h1>
				<?= Html::anchor('/', Asset::img('mmz.png', array('alt' => 'logo', 'width' => '90', 'height' => '90'))) ?>
			</h1>
			</div> 

			<?= $nav ?>

			<?= isset($content) ? $content : null ?>
			
		</div><!--Main -->

	</div><!--Wrapper  -->

	<footer>
		<p id="divider">The MegaMindz &copy; 2012 </p>
		<p><?= Html::anchor('copy', 'Legal & Copyright ' )?></p>
	</footer>

	<?= Casset::render_js() ?>
  
  </body>
</html>
