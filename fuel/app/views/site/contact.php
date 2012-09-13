<div id="wrap">
	<div id="register">
		<p id='info'>Feel free to contact The MegaMindz with any questions or requests.</p>	
		
		<?php echo Form::open(array('action' => 'site/contact', 'method' => 'post')); ?>  
		   <p>
		   	<div class="field">
		      <?php echo Form::label('First & Last Name', 'name'); ?>
		<?php echo Form::input('name'); ?>
		   </p>
		   <p>
		      <?php echo Form::label('Email', 'email'); ?>
		<?php echo Form::input('email'); ?>
		   </p>
		   <p>
		      <?php echo Form::label('Comments', 'comment'); ?>
		<?php echo Form::textarea('comment', '', array('cols' => 25, 'rows' => 6)); ?>
		   </p>
		 </div> <!--Field  -->
		   <div class="actions">
		      <?php echo Form::submit('submit', 'Send Message', array('id' => 'btn', 'type' => 'submit', 'value' => 'Add' )); ?>
		   </div>
		 
		<?php echo Form::close(); ?>

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