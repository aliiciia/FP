 <div class='inst'>
	<div class='player'>
		<iframe id="musicPlayer" width="600" height="700" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F4645917&amp;auto_play=false&amp;show_artwork=true&amp;color=26827d"></iframe>
	</div><!--Player  -->		
	 
	<div class='store'>
		<div id="shop">
			<div id="buyarea">
				<h3>Secured payments by <span id="paypal">PayPal</span></h3>

				<div id="paypalform">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="Beatform">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="Z3VXVGWRTSE3N">
						<table>
						<tr><td id="inputname"><input type="hidden" name="on0" value="leases">Leases</td></tr>
						<tr><td><select name="os0">
							<option value="1 lease">1 lease $8.00 </option>
							<option value="3 lease">3 lease $20.00 </option>
							<option value="5 leases">5 leases $30.00 </option>
							<option value="10 leases">10 leases $40.00 </option>
						</select> </td></tr>
						<tr><td id="inputname2" ><input type="hidden" name="on1" value="Name of Beat">Name of Beat</td></tr>
						<tr><td><input id="namefield" class="required" type="text" name="os1" pattern ="[a-zA-Z0-9 ]+" maxlength="200"></td></tr>
						</table>
						<input type="hidden" name="currency_code" value="USD"> 
    
						<input id="paypalbtn" type="image" name="submit" <?= Asset::img('paypal-button.png', array('alt' => 'Btn', 'width' => '200', 'height' => '90')) ?> 
					</form>

						<script>
							$(document).ready(function() {
								$('form.Beatform').simpleValidate({
									errorElement: 'em'
									
								});
							});
						</script>
				</div> 
			</div>
		</div><!--Shop  -->
				
		<div id="lease">
			<h1>Leasing</h1>
				<p>Leasing Limited To: 1 Commercial Use. </p>
				<p>Uses: Mixtape, Performance.</p>
				<p>Distribution: Up To 2,500 Copies. </p>
			<h5>Delivery</h5>
				<p>Instrumental Will Be Delivered Within 12hrs In Mp3 Format. </p>	
			</div><!--Lease  -->						
	</div><!--Store  -->	

	       
</div><!--inst  -->
	     