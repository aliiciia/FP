			<div id="image">
  				<div id="container" class="cf">

					<div id="main" role="main">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<?= Asset::img('pic2.jpg') ?>
									</li>
									<li>
										<?= Asset::img('khloe.jpg') ?>
									</li>
									<li>
										<?= Asset::img('studio.jpg') ?>
									</li>
									<li>
										<?= Asset::img('showcase.png') ?>
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
					<p>Welcome to MegamindzMusic.com. We are Your one stop shop for industry ready and top quality instrumentals. On this site we offer instrumentals, video tutorials, and free downloads to help you exel and get better at your craft.</p>
				</div><!--Features  -->
				
				<div class="news">
					   <div id="headline1">
						<?= Asset::img('GO.gif', array('alt' => 'new song GO')) ?>
						<div id="newsinfo">
						<h2><a href="inst.html"> GO! (New Instrumentals)</a></h2>
						<p>Crazy New Dubsteb Release with vocals by Siren. Lease now for $8. Contact me for Exclusive Prices.</p>
						</div><!--Newsinfo  -->
					</div><!--headline1  -->
					
					 <div id="headline2">
						<?= Asset::img('drake.jpg', array('alt' => 'free on top of the world')) ?>
						<div id="newsinfo">
						<h2><a href="inst.html"> On Top Of The World! <br>(Free Download)</a></h2>
						<p>FREE DOWNLOAD TODAY ONLY!! This instrumental is an R&amp;B drake type of beat. Download will no longer be free after midnight.</p>
						</div><!--Newsinfo  -->
					</div><!--Headline2  -->
				</div><!--News  -->
			
			</div> <!--sections  --> 
					
			<div class="feeds">
						
				<div id="events">
					 <h2>Events</h2>
					 <ul>
						<li><span id="evt">Driven Music Conference October 5-7 2012 Atlanta, GA</span></li>
						<li><span id="evt">IStandard Beast of the Beats December 2012 New York, NY.</span></li>
						<li><span id="evt">ASCAP "I Create Music" EXPO April 18-20, 2013 in Los Angeles, CA </span></li>
					 </ul>
				</div><!--Events  -->
							
				<div id="twitter">
					<h2>Twitter</h2>
		
					<div id="twitterSearch" class="tweets"></div>
					
					<script type="text/javascript">
						$('#twitterSearch').liveTwitter('THEMEGAMINDZ', {limit: 3, imageSize:38, retweets:'user_timeline'});
					</script>
				</div><!--Twitter  -->
							
							
			</div> <!--Feeds  -->