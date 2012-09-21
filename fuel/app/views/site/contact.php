<div id="wrap">
	<div id="register">
		<p id='info'>Feel free to contact The MegaMindz with any questions or requests.</p>	
		
		<?php echo Form::open(array('action' => 'site/contact', 'method' => 'post', 'class' => 'Contactform')); ?>  
		   
		   	<div class="field">
		   	<p>	
		    <?php echo Form::label('First & Last Name', 'name'); ?> 
		   
		<?php echo Form::input('name', '', array('name' => 'name', 'pattern' => '[a-zA-Z0-9 ]+', 'class' => 'required')); ?>
		   </p>
		   <p>
		      <?php echo Form::label('Email', 'email'); ?>
		<?php echo Form::input('email', '', array('name' => 'email','pattern' => '^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$','class' => 'required email')); ?>
		   </p>
		   <p>
		      <?php echo Form::label('Comments', 'comment'); ?>
		<?php echo Form::textarea('comment', '', array('name' => 'comment','cols' => 25, 'rows' => 6 , 'class' => 'required')); ?>
		  </p>
		 </div> <!--Field  -->
		   <div class="actions">
		      <?php echo Form::submit('submit', 'Send Message', array('id' => 'btn', 'type' => 'submit', 'value' => 'Add' )); ?>
		   </div>

		 
		<?php echo Form::close(); ?>

			<script>
				$(document).ready(function() {
					$('form.Contactform').simpleValidate({
						errorElement: 'em'
						
					});
				});
			</script>

	</div><!--Register  -->
		
	<div id="networking">
			<h2>Networking</h2>
			<ul>

                <li><?= Html::anchor('http://www.twitter.com/themegamindz', Asset::img('twitter.png', array('alt' => 'twitter' ,'width' => '40', 'height' => '40')) . 'themegamindz', array('class' => 'text')) ?></li>
               <li> <?= Html::anchor('https://www.soundclick.com/themegamindz', Asset::img('soundclick.png', array('alt' => 'soundclick' ,'width' => '40', 'height' => '40')) . 'themegamindz', array('class' => 'text')) ?></li>
			   <li> <?= Html::anchor('https://www.facebook.com/mega.mindz.75', Asset::img('facebook.png',array('alt' => 'facebook','width' => '40', 'height' => '40')) . 'mega.mindz.75', array('class' => 'text')) ?></li>

                <li><?= Html::anchor('https://www.facebook.com/shawn.deshield.5', Asset::img('facebook.png', array('alt' => 'facebook','width' => '40', 'height' => '40')) . 'shawn.deshield.5 ', array('class' => 'text')) ?></li>
			</ul>
	</div><!--Networking  -->    

</div><!--Wrap  -->