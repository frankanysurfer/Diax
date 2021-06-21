<?php
// Output function that displays the option page content
function rcc_options_page() {

	if ( !current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}

	$rcc_options = get_option('rcc_settings');
	$rcc_plugin_name = "Responsive Cookie Consent";


	ob_start(); ?>
    
	<div class="wrap theme-options-wrap">
    
		<h2><?php _e($rcc_plugin_name . ' Settings', 'responsive-cookie-consent'); ?></h2>
        <br/>
       
		<form method="post" action="options.php">
        
        
        	<?php settings_fields('rcc_settings_group'); ?>
            
            
            <p class="submit">
            	<input type="submit" class="button-primary" value="<?php _e('Save Options', 'responsive-cookie-consent'); ?>" />
            </p>
            
            
            <br/>
            
            <h3><?php _e('Display', 'responsive-cookie-consent'); ?></h3>
            <hr>
           
            <p>
            	<input id="rcc_settings[enable]" name="rcc_settings[enable]" type="hidden" value="0"  /> 
                <?php $enable = (isset($rcc_options['enable'])) ? $rcc_options['enable'] : 0; ?>
                <label class="description">
					<input id="rcc_settings[enable]" name="rcc_settings[enable]" type="checkbox" value="1" <?php checked(1, $enable); ?> /> 
					<?php _e('Enable the Cookie Consent Bar', 'responsive-cookie-consent'); ?>
            	</label>
            </p>
            
            <p>
            	<input id="rcc_settings[front-only]" name="rcc_settings[front-only]" type="hidden" value="0"  /> 
                <?php $frontOnly = (isset($rcc_options['front-only'])) ? $rcc_options['front-only'] : 0; ?>
                <label class="description">
            	<input id="rcc_settings[front-only]" name="rcc_settings[front-only]" type="checkbox" value="1" <?php checked(1, $frontOnly); ?> /> 
            	<?php _e('Show on front page only', 'responsive-cookie-consent'); ?>
            	</label>
            </p>
            
            <p>
            	<input id="rcc_settings[fixed-to-bottom]" name="rcc_settings[fixed-to-bottom]" type="hidden" value="0"  /> 
                <?php $fixedToBottom = (isset($rcc_options['fixed-to-bottom'])) ? $rcc_options['fixed-to-bottom'] : 0; ?>
                <label class="description">
            	<input id="rcc_settings[fixed-to-bottom]" name="rcc_settings[fixed-to-bottom]" type="checkbox" value="1" <?php checked(1, $fixedToBottom); ?> /> 
            	<?php _e('Display at bottom of screen (Use this option if your theme is using a fixed header)', 'responsive-cookie-consent'); ?>
            	</label>
            </p>
                       
                        
            <br/>
            
                        
            <h3><?php _e('General', 'responsive-cookie-consent'); ?></h3>
            <hr>

            <h4><?php _e('Cookie Policy Message', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input class="rcc-message" id="rcc_settings[message]" name="rcc_settings[message]" type="text" maxlength="300" value="<?php sanitize_text_field(rcc_value('message')); ?>" /> 
            	<label class="description" for="rcc_settings[message]"><?php _e('', 'responsive-cookie-consent'); ?></label>
            </p><br/>
            

            <h4><?php _e('Accept Button Wording', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[accept]" name="rcc_settings[accept]" type="text" maxlength="50" value="<?php sanitize_text_field(rcc_value('accept')); ?>" /> 
            	<label class="description" for="rcc_settings[accept]"><?php _e(''); ?></label>
            </p><br/>
                        
            <h4><?php _e('More Info Button Wording', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[more-info]" name="rcc_settings[more-info]" type="text" maxlength="50" value="<?php sanitize_text_field(rcc_value('more-info')); ?>" /> 
            	<label class="description" for="rcc_settings[more-info]"><?php _e('', 'responsive-cookie-consent'); ?></label>
            </p><br/>
                        
            <h4><?php _e('Cookie Policy URL', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[policy-url]" name="rcc_settings[policy-url]" type="text" maxlength="400" value="<?php sanitize_text_field(rcc_value('policy-url')); ?>" /> 
            	<label class="description" for="rcc_settings[policy-url]"><?php _e('E.g. /cookie-policy', 'responsive-cookie-consent'); ?></label>
            </p>

                       
            <br/><br/>
            
            
            <h3><?php _e('Styling', 'responsive-cookie-consent'); ?></h3>
            <hr>
            
            <h4><?php _e('Font', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[font]" name="rcc_settings[font]" type="text" maxlength="100" value="<?php sanitize_text_field(rcc_value('font')); ?>" /> 
            	<label class="description" for="rcc_settings[font]"><?php _e('E.g. Century Gothic', 'responsive-cookie-consent'); ?></label>
            </p><br/>
            
            
            <h4><?php _e('Mobile Width', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[width]" name="rcc_settings[width]" type="number" value="<?php rcc_value('width'); ?>" /> 
            	<label class="description" for="rcc_settings[width]"><?php _e('%', 'responsive-cookie-consent'); ?></label>
            </p><br/>
            
            
            <h4><?php _e('Desktop Max Width', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[max-width]" name="rcc_settings[max-width]" type="number" value="<?php rcc_value('max-width'); ?>" /> 
            	<label class="description" for="rcc_settings[max-width]"><?php _e('px', 'responsive-cookie-consent'); ?></label>
            </p><br/>
            
            
            <h4><?php _e('Cookie Bar - Padding (Top and Bottom)', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[padding]" name="rcc_settings[padding]" type="number" value="<?php rcc_value('padding'); ?>" /> 
            	<label class="description" for="rcc_settings[padding]"><?php _e('px', 'responsive-cookie-consent'); ?></label>
            </p><br/>
            
            
            <h4><?php _e('Cookie Bar - Background Color', 'responsive-cookie-consent'); ?></h4>
            <p>
                <div class="color-picker" style="position:relative;">
                    <input data-id="1" class="color" name="rcc_settings[background]" type="text" maxlength="7" value="<?php sanitize_text_field(rcc_value('background')); ?>" />
                    <div class="colorpicker" style="z-index:100; position:absolute; display:none;"></div>
                </div>
            </p><br/>
            
            
            <h4><?php _e('Cookie Bar - Border Bottom Color', 'responsive-cookie-consent'); ?></h4>
            <p>
                <div class="color-picker" style="position:relative;">
                    <input data-id="2" class="color" name="rcc_settings[border]" type="text" maxlength="7" value="<?php sanitize_text_field(rcc_value('border')); ?>" />
                    <div class="colorpicker" style="z-index:100; position:absolute; display:none;"></div>
                </div>
            </p><br/>
            
            
            <h4><?php _e('Cookie Bar - Border Bottom Size', 'responsive-cookie-consent'); ?></h4>
            <p>
            	<input id="rcc_settings[border-size]" name="rcc_settings[border-size]" type="number" value="<?php rcc_value('border-size'); ?>" /> 
            	<label class="description" for="rcc_settings[border-size]"><?php _e('px', 'responsive-cookie-consent'); ?></label>
            </p><br/>            
            
            
            <h4><?php _e('Cookie Bar Text Color', 'responsive-cookie-consent'); ?></h4>
            <p>
                <div class="color-picker" style="position:relative;">
                    <input data-id="3" class="color" name="rcc_settings[text-color]" type="text" maxlength="7" value="<?php sanitize_text_field(rcc_value('text-color')); ?>" />
                    <div class="colorpicker" style="z-index:100; position:absolute; display:none;"></div>
                </div>
            </p><br/>

            
            <h4><?php _e('Accept Button - Background Color', 'responsive-cookie-consent'); ?></h4>
            <p>
                <div class="color-picker" style="position:relative;">
                    <input data-id="4" class="color" name="rcc_settings[button-bg]" type="text" maxlength="7" value="<?php sanitize_text_field(rcc_value('button-bg')); ?>" />
                    <div class="colorpicker" style="z-index:100; position:absolute; display:none;"></div>
                </div>
            </p><br/>

            
            <h4><?php _e('Link Color', 'responsive-cookie-consent'); ?></h4>
            <p>
                <div class="color-picker" style="position:relative;">
                    <input data-id="5" class="color" name="rcc_settings[button-color]" type="text" maxlength="7" value="<?php sanitize_text_field(rcc_value('button-color')); ?>" />
                    <div class="colorpicker" style="z-index:100; position:absolute; display:none;"></div>
                </div>
            </p><br/>


            <p class="submit">
            	<input type="submit" class="button-primary" value="<?php _e('Save Options', 'responsive-cookie-consent'); ?>" />
            </p>

        </form>
        
	</div>
    <?php
	echo ob_get_clean();
}
?>