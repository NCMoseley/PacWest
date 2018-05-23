<?php
$auth = SwpmAuth::get_instance();
$setting = SwpmSettings::get_instance();
$password_reset_url = $setting->get_value('reset-page-url');
$join_url = $setting->get_value('join-us-page-url');
?>
<div class="simple-form-wrapper">
    
    <form id="simple-form" name="swpm-login-form" method="post" action="">
      <div class="simple-form-inner">
            
        <div class="membership-wrapper">
          <div class="email-password">
            <div class="swpm-username-input">
                <input type="text" class="swpm-text-field swpm-username-field" id="swpm_user_name" value="" size="25" name="swpm_user_name" placeholder="Email" />
            </div>
            
            <div class="swpm-password-input">
                <input type="password" class="swpm-text-field swpm-password-field" id="swpm_password" value="" size="25" name="swpm_password" placeholder="Password"/>
            </div>

             <div class="swpm-before-login-submit-section"><?php echo apply_filters('swpm_before_login_form_submit_button', ''); ?></div>


            <?php if ( is_page('investors')) { ?>
            <div class="swpm-login-submit">
                <input type="submit" class="swpm-login-form-submit" name="swpm-login" value="<?php echo SwpmUtils::_('Submit') ?>"/>
            </div>
            <?php } else { ?>
               <div class="swpm-login-submit">
               <input type="submit" class="swpm-login-form-submit" name="swpm-login" value="<?php echo SwpmUtils::_('Investor Login') ?>"/>
           </div>
           <?php } ?>


          </div>
         
            <div class="swpm-login-action-msg">
                <span class="swpm-login-widget-action-msg"><?php echo $auth->get_message(); ?></span>
           
            </div>
        </div>

           
            
           

           
         
            
        </div>
    </form>
</div>