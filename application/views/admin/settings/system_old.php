
    <!-- Page heading -->
    <div class="page-head">
    <!-- Page heading -->
        <h2 class="pull-left"><?php echo lang('Settings')?>
		  <!-- page meta -->
		  <span class="page-meta"><?php echo lang('System settings')?></span>
		</h2>


		<!-- Breadcrumb -->
		<div class="bread-crumb pull-right">
          <a href="<?php echo site_url('admin')?>"><i class="icon-home"></i> <?php echo lang('Home')?></a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a class="bread" href="<?php echo site_url('admin/settings')?>"><?php echo lang('Settings')?></a>
          <span class="divider">/</span> 
          <a class="bread-current" href="<?php echo site_url('admin/settings/system')?>"><?php echo lang('System settings')?></a>
		</div>

		<div class="clearfix"></div>

    </div>
    <!-- Page heading ends -->



    <!-- Matter -->

    <div class="matter-settings">
    
    <div style="margin-bottom: 8px;" class="tabbable">
      <ul class="nav nav-tabs settings-tabs">
        <li><a href="<?php echo site_url('admin/settings/contact')?>"><?php echo lang('Company contact')?></a></li>
        <li><a href="<?php echo site_url('admin/settings/language')?>"><?php echo lang('Languages')?></a></li>
        <li><a href="<?php echo site_url('admin/settings/template')?>"><?php echo lang('Template')?></a></li>
        <li class="active"><a href="<?php echo site_url('admin/settings/system')?>"><?php echo lang('System settings')?></a></li>
        <li><a href="<?php echo site_url('admin/settings/addons')?>"><?php echo lang_check('Addons')?></a></li>
        <?php if(config_db_item('slug_enabled') === TRUE): ?>
        <li><a href="<?php echo site_url('admin/settings/slug')?>"><?php echo lang_check('SEO slugs')?></a></li>
        <?php endif; ?>
        <?php if(config_db_item('currency_conversions_enabled') === TRUE): ?>
        <li><a href="<?php echo site_url('admin/settings/currency_conversions')?>"><?php echo lang_check('Currency Conversions')?></a></li>
        <?php endif; ?>
      </ul>
    </div>
    
    <div class="container">
          <div class="row">

            <div class="col-md-12">


              <div class="widget wlightblue">
                
                <div class="widget-head">
                  <div class="pull-left"><?php echo lang('System settings')?></div>
                  <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="icon-chevron-up"></i></a> 
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                    <?php echo validation_errors()?>   
                    <?php if($this->session->flashdata('error')):?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>            
                    <hr />
                    <!-- Form starts.  -->
                    <?php echo form_open(NULL, array('class' => 'form-horizontal', 'role'=>'form'))?>                              
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang('No-reply email')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('noreply', set_value('noreply', isset($settings['noreply'])?$settings['noreply']:''), 'class="form-control" id="inputAddress" placeholder="'.lang('No-reply email').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang('Zoom index')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('zoom', set_value('zoom', isset($settings['zoom'])?$settings['zoom']:''), 'class="form-control" id="inputAddress" placeholder="'.lang('Zoom index').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label" for="inputZoom_dashboard"><?php echo lang_check('Zoom index dashboard')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('zoom_dashboard', set_value('zoom_dashboard', isset($settings['zoom_dashboard'])?$settings['zoom_dashboard']:''), 'class="form-control" id="inputZoom_dashboard" placeholder="'.lang('Zoom index dashboard').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang('PayPal payment email')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('paypal_email', set_value('paypal_email', isset($settings['paypal_email'])?$settings['paypal_email']:''), 'class="form-control" id="inputPayPalEmail" placeholder="'.lang('PayPal payment email').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Enable payments')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('payments_enabled', '1', set_value('payments_enabled', isset($settings['payments_enabled'])?$settings['payments_enabled']:'0'), 'id="input_payments_enabled"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Activation price')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('activation_price', set_value('activation_price', isset($settings['activation_price'])?$settings['activation_price']:''), 'class="form-control" id="inputActivationPrice" placeholder="'.lang_check('Activation price').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Featured price')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('featured_price', set_value('featured_price', isset($settings['featured_price'])?$settings['featured_price']:''), 'class="form-control" id="inputFeaturedPrice" placeholder="'.lang_check('Activation price').'"')?>
                                  </div>
                                </div>
                                
                                <?php if(file_exists(APPPATH.'controllers/paymentconsole.php')): ?>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Authorize api login id')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('authorize_api_login_id', set_value('authorize_api_login_id', isset($settings['authorize_api_login_id'])?$settings['authorize_api_login_id']:''), 'class="form-control" id="input_authorize_api_login_id" placeholder="'.lang_check('Authorize api login id').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Authorize api hash secret')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('authorize_api_hash_secret', set_value('authorize_api_hash_secret', isset($settings['authorize_api_hash_secret'])?$settings['authorize_api_hash_secret']:''), 'class="form-control" id="input_authorize_api_hash_secret" placeholder="'.lang_check('Authorize api hash secret').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Authorize api transaction key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('authorize_api_transaction_key', set_value('authorize_api_transaction_key', isset($settings['authorize_api_transaction_key'])?$settings['authorize_api_transaction_key']:''), 'class="form-control" id="input_authorize_api_transaction_key" placeholder="'.lang_check('Authorize api transaction key').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Payu API pos id')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('payu_api_pos_id', set_value('payu_api_pos_id', 
                                                isset($settings['payu_api_pos_id'])?$settings['payu_api_pos_id']:''), 
                                                'class="form-control" id="input_payu_api_pos_id" placeholder="'.lang_check('Payu API pos id').'"')?>
                                  </div>
                                </div> 
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Payu first key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('payu_api_key_1', set_value('payu_api_key_1', 
                                    isset($settings['payu_api_key_1'])?$settings['payu_api_key_1']:''), 
                                    'class="form-control" id="input_payu_api_key_1" placeholder="'.lang_check('Payu first key').'"')?>
                                  </div>
                                </div> 
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Payu second key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('payu_api_key_2', set_value('payu_api_key_2', 
                                    isset($settings['payu_api_key_2'])?$settings['payu_api_key_2']:''), 
                                    'class="form-control" id="input_payu_api_key_2" placeholder="'.lang_check('Payu second key').'"')?>
                                  </div>
                                </div> 
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Payu authorisation key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('payu_api_auth_key', set_value('payu_api_auth_key', 
                                    isset($settings['payu_api_auth_key'])?$settings['payu_api_auth_key']:''), 
                                    'class="form-control" id="input_payu_api_auth_key" placeholder="'.lang_check('Payu authorisation key').'"')?>
                                  </div>
                                </div> 
                                
                                
                                
                                <?php endif; ?>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Default PayPal currency code')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_dropdown('default_currency', $currencies, set_value('default_currency', isset($settings['default_currency'])?$settings['default_currency']:''), 'class="form-control"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang('Listing expiry days')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('listing_expiry_days', set_value('listing_expiry_days', isset($settings['listing_expiry_days'])?$settings['listing_expiry_days']:''), 'class="form-control" id="inputListingExpiry" placeholder="'.lang('Listing expiry days').'"')?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label" for="inputJs_date_format">
                                      <?php echo lang_check('Js date format')?>
                                  </label>
                                  <div class="col-lg-10">
                                    <?php
                                    $available_formats = array(
                                        'yyyy-MM-dd' => 'yyyy-MM-dd (2017-07-07)',
                                        'yy-MM-dd' => 'yy-mm-dd (17-07-07)',
                                        'dd-MM-yyyy' => 'dd-MM-yyyy (07-07-2017)',
                                        'dd-MM-yy' => 'dd-MM-yy (07-07-17)',
                                        'yyyy/MM/dd' => 'yyyy/MM/dd (2017/07/07)',
                                        'yy/MM/dd' => 'yy/MM/dd (17/07/07)',
                                        'dd/MM/yyyy' => 'dd/MM/yyyy (07/07/2017)',
                                        'dd/MM/yy' => 'dd/MM/yy (07/07/17)',
                                        'yyyy.MM.dd' => 'yyyy.MM.dd (2017.07.07)',
                                        'yy.MM.dd' => 'yy.MM.dd (17.07.07)',
                                        'dd.MM.yyyy' => 'dd.MM.yyyy (07.07.2017)',
                                        'dd.MM.yy' => 'dd.MM.yy (07.07.17)',
                                    );

                                    ?>
                                    <?php echo form_dropdown('js_date_format',$available_formats, set_value('js_date_format', isset($settings['js_date_format'])?$settings['js_date_format']:'yyyy-MM-dd'), 'class="form-control" id="inputJs_date_format" placeholder="'.lang_check('Js date format').'"')?>
                                  
                                  </div>
                                </div>
                    
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="inputPhp_date_format"><?php echo lang_check('Php date format')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('php_date_format',  set_value('php_date_format', isset($settings['php_date_format'])?$settings['php_date_format']:''), 'class="form-control" id="inputPhp_date_format" placeholder="'.lang_check('Php date format').'"')?>
                                  </div>
                                </div>
                    
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('Google Maps API key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('maps_api_key', set_value('maps_api_key', isset($settings['maps_api_key'])?$settings['maps_api_key']:''), 'class="form-control" id="input_GoogleMapsAPIkey" placeholder="'.lang('Google Maps API key').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('AdSense 728x90 code')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_textarea('adsense728_90', set_value('adsense728_90', isset($settings['adsense728_90'])?$settings['adsense728_90']:''), 'placeholder="'.lang_check('AdSense 728x90 code').'" rows="3" class="form-control"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('AdSense 160x600 code')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_textarea('adsense160_600', set_value('adsense160_600', isset($settings['adsense160_600'])?$settings['adsense160_600']:''), 'placeholder="'.lang_check('AdSense 160x600 code').'" rows="3" class="form-control"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Withdrawal payment details')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_textarea('withdrawal_details', set_value('withdrawal_details', isset($settings['withdrawal_details'])?$settings['withdrawal_details']:''), 'placeholder="'.lang_check('Withdrawal payment details').'" rows="3" class="form-control"')?>
                                  </div>
                                </div>
                                <?php if(config_item('results_page_id_enabled')!=FALSE): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Results page')?>*</label>
                                  <div class="col-lg-10">
                                    <?php echo form_dropdown('results_page_id', $pages_no_parents, set_value('results_page_id', isset($settings['results_page_id'])?$settings['results_page_id']:''), 'class="form-control"')?>
                                  </div>
                                </div>
                                <?php endif; ?>
                    
                                <?php if(false): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Enable masking')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('agent_masking_enabled', '1', set_value('agent_masking_enabled', isset($settings['agent_masking_enabled'])?$settings['agent_masking_enabled']:'0'), 'id="inputEnableMasking"')?>
                                  </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if(file_exists(APPPATH.'controllers/admin/reviews.php')): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Enable reviews')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('reviews_enabled', '1', set_value('reviews_enabled', isset($settings['reviews_enabled'])?$settings['reviews_enabled']:'0'), 'id="inputEnableReviews"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Enable reviews public visible')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('reviews_public_visible_enabled', '1', set_value('reviews_public_visible_enabled', isset($settings['reviews_public_visible_enabled'])?$settings['reviews_public_visible_enabled']:'0'), 'id="inputEnablePublicVisible"')?>
                                  </div>
                                </div>
                                <?php endif; ?>  
                                
                                <?php if(file_exists(APPPATH.'controllers/admin/showroom.php')): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Enable showroom slideshow')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('showroom_slideshow_enabled', '1', set_value('showroom_slideshow_enabled', isset($settings['showroom_slideshow_enabled'])?$settings['showroom_slideshow_enabled']:'0'), 'id="input_showroom_slideshow_enabled"')?>
                                  </div>
                                </div>
                                <?php endif; ?>  

                                <?php if(file_exists(APPPATH.'controllers/admin/booking.php')): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Booking fee percentage %')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('booking_fee', set_value('booking_fee', isset($settings['booking_fee'])?$settings['booking_fee']:''), 'class="form-control" id="inputBookingfee" placeholder="'.lang_check('Booking fee percentage %').'"')?>
                                  </div>
                                </div>
                                <?php endif; ?> 
                    
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Word filtering')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('word_filtering', set_value('word_filtering', isset($settings['word_filtering'])?$settings['word_filtering']:''), 'class="form-control" id="inputword_filtering" placeholder="'.lang_check('Word filtering').'"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Walkscore enabled')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('walkscore_enabled', '1', set_value('walkscore_enabled', isset($settings['walkscore_enabled'])?$settings['walkscore_enabled']:'0'), 'id="input_walkscore_enabled"')?>
                                  </div>
                                </div>
                                 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Property submission disabled')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('property_subm_disabled', '1', set_value('property_subm_disabled', isset($settings['property_subm_disabled'])?$settings['property_subm_disabled']:'0'), 'id="input_property_subm_disabled"')?>
                                  </div>
                                </div>
                                 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Page offline')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('page_offline', '1', set_value('page_offline', isset($settings['page_offline'])?$settings['page_offline']:'0'), 'id="input_page_offline"')?>
                                  </div>
                                </div>
                                 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Page offline message')?></label>
                                  <div class="col-lg-10">
                                     <?php echo form_textarea('page_offline_message', set_value('page_offline_message', isset($settings['page_offline_message'])?$settings['page_offline_message']:''), 'placeholder="'.lang_check('Page offline message').'" rows="3" class="form-control"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('Enable quick submission')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('enable_qs', '1', set_value('enable_qs', isset($settings['enable_qs'])?$settings['enable_qs']:'0'), 'id="input_enable_qs"')?>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('Multilanguage on quick submission')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('multilang_on_qs', '1', set_value('multilang_on_qs', isset($settings['multilang_on_qs'])?$settings['multilang_on_qs']:'0'), 'id="input_multilang_on_qs"')?>
                                  </div>
                                </div>
                               <?php if(file_exists(APPPATH.'libraries/Clickatellapi.php')): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Clickatell api key')?> (<?php echo lang_check('Define only one field api key or appi id')?>)</label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('clickatell_api_key', set_value('clickatell_api_key', isset($settings['clickatell_api_key'])?$settings['clickatell_api_key']:''), 'class="form-control" id="inputclickatell_api_key" placeholder="'.lang_check('Clickatell api key').'"')?>
                                  </div>
                                </div>
                                <?php endif;?>
                                <?php if(config_item('mailchimp_enable')!=FALSE): ?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label" for="inputmailchimp_api_key"><?php echo lang_check('Mailchimp api key')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('mailchimp_api_key', set_value('mailchimp_api_key', isset($settings['mailchimp_api_key'])?$settings['mailchimp_api_key']:''), 'class="form-control" id="inputmailchimp_api_key" placeholder="'.lang_check('Mailchimp api key').'"')?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label" for="inputmailchimp_list_id"><?php echo lang_check('Mailchimp list id')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('mailchimp_list_id', set_value('mailchimp_list_id', isset($settings['mailchimp_list_id'])?$settings['mailchimp_list_id']:''), 'class="form-control" id="inputmailchimp_list_id" placeholder="'.lang_check('Mailchimp list id').'"')?>
                                  </div>
                                </div>
                                <?php endif;?>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php echo lang_check('Limit markers on map')?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_input('limit_markers', set_value('limit_markers', isset($settings['limit_markers'])?$settings['limit_markers']:''), 'class="form-control" id="inputlimit_markers" placeholder="'.lang_check('Limit markers on map').'"')?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('Open street map (instead google map)');?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('map_version', 'open_street', set_value('map_version', isset($settings['map_version'])?$settings['map_version']:'0'), 'id="input_map_version"')?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('USER type visible in agents');?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('agents_page_user_enable', '1', set_value('agents_page_user_enable', isset($settings['agents_page_user_enable'])?$settings['agents_page_user_enable']:'0'), 'id="input_agents_page_user_enable"')?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label"><?php _l('Featured on top disabled');?></label>
                                  <div class="col-lg-10">
                                    <?php echo form_checkbox('featured_on_top_disabled', '1', set_value('featured_on_top_disabled', isset($settings['featured_on_top_disabled'])?$settings['featured_on_top_disabled']:'0'), 'id="input_featured_on_top_disabled"')?>
                                  </div>
                                </div>
                                <hr />
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                    <?php echo form_submit('submit', lang('Save'), 'class="btn btn-primary"')?>
                                    <a href="<?php echo site_url('admin/settings')?>" class="btn btn-default" type="button"><?php echo lang('Cancel')?></a>
                                  </div>
                                </div>
                       <?php echo form_close()?>
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>  

            </div>
          </div>
    </div>
    </div>

	<!-- Matter ends -->

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>