			<div id="image">
  				<div id="container" class="cf">

					<div  role="main">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<?= Asset::img('pic2.jpg', array('alt' => 'megamindz in chris studio.')) ?>
									</li>
									<li>
										<?= Asset::img('khloe.jpg', array('alt' => 'baby megamindz.')) ?>
									</li>
									<li>
										<?= Asset::img('studio.jpg', array('alt' => 'megamindz at plush')) ?>
									</li>
									<li>
										<?= Asset::img('showcase.jpg', array('alt' => 'megamindz in studio.')) ?>
									</li>
								</ul>
							</div>
						</section>
					</div>

				</div>  
			
			</div><!--Image  -->
				 
			<div class="sections">
							   
				<div id="features">
					<h2>Featured Beats</h2>
					<p>Welcome to MegamindzMusic.com. We are your one stop shop for industry ready and top quality instrumentals. On this site we offer instrumentals, video tutorials, and free downloads to help you excel and perfect your craft.</p>
				</div><!--Features  -->
				
				<div class="news">
					   <div id="headline1">
						<?= Asset::img('GO.gif', array('alt' => 'new song GO')) ?>
						<div id="newsinfo">
						<h2><?= Html::anchor('instrumentals', 'GO! (New Instrumentals)' )?></h2>
						<p>Crazy New Dubsteb Release with vocals by Siren. Lease now for $8. Contact me for Exclusive Prices.</p>
						</div><!--Newsinfo  -->
					</div><!--headline1  -->
					
					 <div id="headline2">
						<?= Asset::img('drake.jpg', array('alt' => 'free on top of the world')) ?>
						<div id="newsinfo2">
						<h2><?= Html::anchor('instrumentals', 'On Top Of The World!<br>(Free Download)' )?></h2>
						<p>FREE DOWNLOAD TODAY ONLY!! This instrumental is an R&amp;B drake type of beat. Download will no longer be free after midnight.</p>
						</div><!--Newsinfo  -->
					</div><!--Headline2  -->
				</div><!--News  -->
			
			</div> <!--sections  --> 
					
			<div class="feeds">
						
				<div id="events">
					 <h2>Events</h2>
					 <ul>
					 	<?php foreach ($events as $event): ?>
						<li><span><?= isset($event->detail) ? $event->detail : null ?></span></li>
						<?php endforeach; ?>

					 </ul>
				</div><!--Events  -->
							
				<div id="twitter">
					<h2>Twitter</h2>
		
					<div id="twitterSearch" class="tweets"></div>
					
				</div><!--Twitter  -->
							
							
			</div> <!--Feeds  -->