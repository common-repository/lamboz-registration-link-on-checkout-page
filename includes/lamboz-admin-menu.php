<div id="wpbody-content">
	<?php screen_icon(); ?>
	<div class="wrap">
		<h1>Lamboz Registration Link On Checkout Page Settings</h1>
		<div class="lrlwc_left">
			<form method="post" action="options.php">
				<?php settings_fields( 'LRLWC_options_group' ); ?>
				<table class="form-table" role="presentation">
					<tbody>
						<tr>
							<th scope="row">
								<label for="lrlwc_registration_link">Custom registration link:</label>
							</th>
							<td>
								<input type="text" id="lrlwc_registration_link" name="lrlwc_registration_link" value="<?php echo get_option('lrlwc_registration_link'); ?>"  class="regular-text"/>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="lrlwc_registration_title">Registration Notice label:</label>
							</th>
							<td>
								<input type="text" id="lrlwc_registration_title" name="lrlwc_registration_title" value="<?php echo get_option('lrlwc_registration_title'); ?>"  class="regular-text"/>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="lrlwc_registration_title">Registration link label:</label>
							</th>
							<td>
								<input type="text" id="lrlwc_registration_question" name="lrlwc_registration_question" value="<?php echo get_option('lrlwc_registration_question'); ?>"  class="regular-text"/>
							</td>
						</tr>
					</tbody>
				</table>
				<p class="submit">
					<?php  submit_button(); ?>
				</p>
			</form>
		</div>
		<div class="lrlwc_right">
			<div class="lrlwc_box">
				<h2>Like our Plugin?</h2>
				<p ><a href="https://paypal.me/ultimateblogger" target="_blank"><img src="<?php echo LRLWC_PLUGIN_URL; ?>/includes/img/paypal.png"></a>
				</p>
				<p>
					<h2><a href="https://paypal.me/ultimateblogger" target="_blank">Please donate us on Paypal to improve more. </a></h2>
				</p>
			</div>
		</div>
	</div>

</div>