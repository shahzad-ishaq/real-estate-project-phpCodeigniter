<?php _widget('custom_popup');?>
<div class="se-pre-con"></div>

<!-- Start JS MAP  -->
<?php load_map_api(config_db_item('map_version'), $lang_code);?>

<?php cache_file('big_js_footer.js', NULL, true); ?>
<?php cache_file('big_js_orig.js', NULL); ?>

<?php
//_generate_js('_generate_custom_javascript_'.md5(current_url_q()), 'widgets/_generate_custom_javascript.php');

sw_add_script('page_js_'.md5(current_url_q()), 'widgets/_generate_custom_javascript.php');
sw_add_script('page_js_'.md5(current_url_q()), 'widgets/_generate_calendar_js.php');
sw_add_script('page_js_'.md5(current_url_q()), 'widgets/_generate_dependentfields.php');

sw_add_script('page_js_'.md5(current_url_q()), NULL);


?>

<!-- jquery.cookiebar -->
<!-- url  http://www.primebox.co.uk/projects/jquery-cookiebar/ -->
<?php if(config_item('cookie_warning_enabled') === TRUE): ?>
<script src="assets/libraries/cookie_bar/jquery.cookiebar.js"></script>
<script>
 $('document').ready(function(){
    $.cookieBar({
    //declineButton: true,
    message: "<p><?php _l('Accept cookiebar');?></p><br>",
    acceptText: "<?php _l('I Agree');?>",
    //declineText: "<?php _l('I dont agree');?>",
});
}) 
</script>
<?php endif;?>
<!--end jquery.cookiebar -->

<!-- Generate time: <?php echo (microtime(true) - $time_start)?>, version: <?php echo APP_VERSION_REAL_ESTATE; ?> -->

