<div id="wrap">
	<div id="register">
		<p id='info'>Feel free to contact The MegaMindz with any questions or requests.</p>	
		<form name="htmlform" method="post">
			<div class="field">
				<label for="name">Name </label><br>
				<input  type="text" name="first_name" maxlength="50" ><br>
				<label for="email"> Email Address </label><br>
				<input  type="text" name="email" maxlength="80"><br>
				<label for="comments">Comments </label><br>
				<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea><br>
			</div> <!--Field  -->
			<input id="btn" type="submit" value="Send Message">  
		</form>
	</div><!--Register  -->
		
	<div id="networking">
			<h2>Networking</h2>
			<ul>

                <li><?= Html::anchor('http://www.twitter.com/themegamindz', Asset::img('twitter.png', array('alt' => 'twitter' ,'width' => '40', 'height' => '40')) . 'themegamindz', array('class' => 'text')) ?></li>
               <li> <?= Html::anchor('https://www.soundclick.com/themegamindz', Asset::img('soundclick.png', array('alt' => 'soundclick' ,'width' => '40', 'height' => '40')) . 'themegamindz', array('class' => 'text')) ?></li>
			   <li> <?= Html::anchor('https://www.facebook.com/mega.mindz.75', Asset::img('facebook.png', array('alt' => 'facebook','width' => '40', 'height' => '40')) . 'mega.mindz.75', array('class' => 'text')) ?></li>

                <li><?= Html::anchor('https://www.facebook.com/shawn.deshield.5', Asset::img('facebook.png', array('alt' => 'facebook','width' => '40', 'height' => '40')) . 'shawn.deshield.5 ', array('class' => 'text')) ?></li>


				
				<!-- <li> <a href="https://twitter.com/themegamindz"><img src="image/twitter.png" alt="twiter" width=35px height=35px /> <span class='text'>themegamindz</span></a></li>
				<li> <a href="https://www.soundclick.com/themegamindz"><img src="image/soundclick.png" alt="soundclick" width=35px height=35px /> <span class='text'>themegamindz</span> </a></li>
				<li> <a href="https://www.facebook.com/mega.mindz.75"><img src="image/facebook.png" alt="facebook" width=35px height=35px /> <span class='text'>mega.mindz.75 </span> </a></li>
				<li> <a href="https://www.facebook.com/shawn.deshield.5"><img src="image/facebook.png" alt="facebook" width=35px height=35px /> <span class='text'>shawn.deshield.5 </span> </a></li> -->
			</ul>
	</div><!--Networking  -->         
</div><!--Wrap  -->