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
		<div id="photo">
			
			<?= Html::anchor('assets/img/album/pic1.jpg', Asset::img('shawns.jpg'), array('rel' => 'lightbox[mmz]', 'alt' => 'mmz: image 1 0f 5 thumb', 'title' => 'The MegaMindz making a hit.')) ?>

			<?= Html::anchor('assets/img/album/pic2.jpg', '', array('rel' => 'lightbox[mmz]', 'title' => 'Mac Glo, The MegaMindz, Chris & Phatss')) ?>

			<?= Html::anchor('assets/img/album/pic3.jpg', '', array('rel' => 'lightbox[mmz]', 'title' => 'The MegaMindz hard at work')) ?>
			
			<?= Html::anchor('assets/img/album/pic4.jpg', '', array('rel' => 'lightbox[mmz]', 'title' => 'Phatss, The MegaMindz, Mac Glo & Chris')) ?>

			<?= Html::anchor('assets/img/album/pic5.jpg',  '', array('rel' => 'lightbox[mmz]', 'title' => 'Mac Glo, The MegaMindz, Chris & Phatss.')) ?>

			<div id="photoinfo">
				<h2>Late Night session, Early Moring Grind</h2>
				<p>4am Engineering, Mixing and Producing in the Studio With The Megamindz, Phats The Producer, Mac Glo and Chris.</p><br>
				<h5> 5 Images</h5>
			</div><!--Photoinfo  -->
		</div><!--Photo  -->
			
		<div id="photo">
			<?= Html::anchor('assets/img/album/studio1.jpg',  Asset::img('smg.jpg'), array('rel' => 'lightbox[studio]', 'alt' => 'mmz: image 1 0f 5 thumb', 'title' => 'The MegaMindz and Mac Glo at Plush.')) ?>

			<?= Html::anchor('assets/img/album/studio2.jpg', '', array('rel' => 'lightbox[studio]', 'title' => 'Session with The MegaMindz, Wankaego & Dj DStrong.')) ?>

			<?= Html::anchor('assets/img/album/studio3.jpg', '', array('rel' => 'lightbox[studio]', 'title' => 'The MegaMindz, Wankaego, Germaine Martel & P.')) ?>
			
			<?= Html::anchor('assets/img/album/studio4.jpg', '', array('rel' => 'lightbox[studio]', 'title' => 'The MegaMindz & Mac Glo at Plush.')) ?>
			
			<?= Html::anchor('img/album/studio5.jpg', '', array('rel' => 'lightbox[studio]', 'title' => ' Wankaego, Germaine Martel & Dj DStrong at Plush.')) ?>

			
			<div id="photoinfo">
				<h2>Placements in Process</h2>
				<p>The Megamindz, Mac Glo, JayArUH and P.Butta's Studio session with Dj D-Strong and Wankaego.</p><br>
				<h5> 5 Images</h5>
			</div><!--Photoinfo  -->
		</div><!--Photo  -->
		
	</div>
</div><!--Media  -->