<?php global $oiiio_testimonials_options;
	if ( !isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>wp testimonials</h2>
	<?php if ( false !== $_REQUEST['updated'] ) : ?>
        <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
    <?php endif; // If the form has just been submitted, this shows the notification ?>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<h3><span>wp testimonials settings</span></h3>
						<div class="inside">
                        	<img src="<?php echo plugins_url( 'wp-testimonials-oiiio/inc/images/pro-version.png') ?>" />
                            <p><a href="http://oiiio.tech" class="button-primary" target="_blank">Click Here Buy Pro Version</a></p>
						</div>
					</div>
				</div>
			</div>
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox">
						<h3><span>Short Code</span></h3>
						<div class="inside">
							<p class="description">Where you wanna see the testimonials just place this short code there : <code>[testimonials]</code>
							<br />
							<br />
							If you wanna place testimonials on a page template then use this code there : <br />
							<code>&lt;?php echo do_shortcode("[testimonials]"); ?&gt;</code>
							<br />
							<br />
							<a href="http://oiiio.tech/contact" target="_blank">Ping me for getting help</a>
							<br />
							<br />
							<a href="http://oiiio.tech/documentation" target="_blank">view plugin documentations</a></p>
						</div>
					</div>
				</div>                
			</div>
		</div>
		<br class="clear">
	</div>
</div>