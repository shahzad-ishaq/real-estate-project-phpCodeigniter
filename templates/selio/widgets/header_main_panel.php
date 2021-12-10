<?php
/*
Widget-title: Header main panel
Widget-preview-image: /assets/img/widgets_preview/header_main_panel.webp
 */
?>
<?php
 $lang_array = $this->language_m->get_array_by(array('is_frontend'=>1));
?> 
<div class="header widget_edit_enabled">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="{homepage_url_lang}"  class="navbar-brand">
                    <?php if(!empty($website_logo_url) && stripos($website_logo_url, 'assets/img/logo.png') === FALSE):?>
                        <img src="<?php echo $website_logo_url; ?>" alt="{settings_websitetitle}">
                     <?php elseif(false):?>
                        <?php
                        $first_w =  strtok($settings_websitetitle, " "); // Test
                        ?>
                        <b class="text-color-primary"> <?php echo $first_w;?></b>
                        <?php echo str_replace($first_w, '', $settings_websitetitle);?>
                     <?php else:?>
                        <img src="<?php echo $website_logo_url; ?>" alt="{settings_websitetitle}">
                    <?php endif;?>
                    </a>
                    
                    <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <span class="icon-spar"></span>
                        <span class="icon-spar"></span>
                        <span class="icon-spar"></span>
                    </button>
                    <div class="navbar-collapse" id="navbarSupportedContent">
                        <?php _widget('custom_mainmenu'); ?>
                        <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
                        <div class="d-inline my-2 my-lg-0">
                            <ul class="navbar-nav">
                                <?php if(config_db_item('property_subm_disabled')==FALSE):  ?>
                                <li class="nav-item signin-btn">
                                    {not_logged}
                                     <span class="nav-link">
                                        <i class="la la-sign-in"></i>
                                        <span>
                                            <a href="{front_login_url}#sw_login" class="login_popup_enabled ">
                                                <b class="signin-op"><?php echo lang_check('Sign in');?></b> 
                                            </a>
                                            <?php echo lang_check('or');?>
                                            <a href="{front_login_url}#sw_register" class="">
                                                <b class="reg-op"><?php echo lang_check('Register');?></b>
                                            </a>
                                        </span>
                                    {/not_logged}
                                    {is_logged_user}
                                    <span class="">
                                        <i class="la la-sign-in"></i>
                                        <span>
                                            <a href="{logout_url}" class="btn btn-clear"><?php _l('Logout');?></a>
                                        </span>
                                    {/is_logged_user}
                                    {is_logged_other}
                                    <span class="">
                                            <a href="{logout_url}" class="nav-link">
                                                <i class="la la-sign-in"></i>
                                                <span><b class="signin-op"><?php _l('Sign out');?></b></span>
                                            </a>
                                    {/is_logged_other}
                                </span>
                                </li>
                                <?php endif;?>
                                <?php if(config_db_item('enable_qs') == 1): ?>
                                    <li class="nav-item submit-btn">
                                        <a href="<?php echo site_url('fquick/submission/'.$lang_code); ?>" class="my-2 my-sm-0 nav-link sbmt-btn">
                                            <i class="icon-plus"></i>
                                            <span><?php echo lang_check('Submit Listing');?></span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item submit-btn">
                                        <a href="<?php echo site_url('frontend/editproperty/'.$lang_code.'#content');?>" class="my-2 my-sm-0 nav-link sbmt-btn">
                                            <i class="icon-plus"></i>
                                            <span><?php echo lang_check('Submit Listing');?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item signin-btn d-sm-block d-md-none">
                                    <?php if(sw_count($lang_array) > 1):?> 
                                        <?php _widget('custom_langmenu_alt');?>
                                    <?php endif;?>
                                </li>
                            </ul>
                        </div>
                        <?php endif;?>
                        <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>