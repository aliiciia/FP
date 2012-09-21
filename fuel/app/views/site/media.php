<div class="media" >
				
	<ul class='tabs'>
		<li><a href='#tab1'>Video</a></li>
		<li><a href='#tab2'>Photography</a></li>    
	</ul>

	<div id='tab1'>            
		<div id="video">

			<?= Html::anchor('#', Asset::img('studio.png', array('alt' => 'video1')), array('class' => 'youtube', 'rel' => 'CIYH4LaKPjQ', 'title' => 'Player TEST')) ?> 

			<div id="videoinfo">
				<h2>TGC TAKEOVER </h2>
				<p>The Megamindz, Mac Glo, JayArUH and P.Butta meet up at Plush Studios in Orlando to Prepare for their session with 106 and Park's Dj D-Strong and Video Model Wankaego.</p>
			</div><!--Videoinfo  -->
		</div><!--Video  -->
			
		<div id="video">	
			<?= Html::anchor('#', Asset::img('miami.png', array('alt' => 'video1')), array('class' => 'youtube', 'rel' => 'vVTN08Dx2A4', 'title' => 'Player TEST')) ?>
			<div id="videoinfo">
				<h2>TGC FAMILY IN MIAMI</h2>
				<p>In South Beach, Miami With the crew attending the Istandard Producer showcase.</p>
			</div><!--Videoinfo  -->
		</div><!--Video  -->		
	</div><!--Tab1  -->
		
	<div id='tab2'>
		


		<?php foreach ($albums as $album): ?>
		
		<div id="photo">

			<?php $i = 1 ?>
			<?php foreach ($album->photos as $photo): ?>
			
			<?php $image = ($i === 1 ? Asset::img($photo->path) : '') ?>
			<?= Html::anchor("assets/img/{$photo->path}", $image, array('rel' => 'lightbox[mmz]', 'alt' => "mmz: image {$i} of {$album->total_images()} thumb", 'title' => $photo->title)) ?>
			
			<?php $i++ ?>
			<?php endforeach; ?>

			<div id="photoinfo">
				<h2><?= isset($album->title) ? $album->title : null ?></h2>
				<p><?= isset($album->description) ? $album->description : null ?></p><br>
				<h5> <?= $album->total_images() ?> Images</h5>
			</div><!--Photoinfo  -->
		</div><!--Photo  -->
		<?php endforeach; ?>

	</div>
			   <script type="text/javascript">

				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-XXXXX-X']);
				  _gaq.push(['_trackPageview']);

				  (function() {
					    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

                </script>

</div><!--Media  -->