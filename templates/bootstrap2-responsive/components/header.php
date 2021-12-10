<div class="always-top">
<?php if(config_item('cookie_warning_enabled') === TRUE): ?>

<script>
    
function displayNotification(c_action) {

    // this sets the page background to semi-transparent black should work with all browsers
    var message = "<div id='cookiewarning' >";

    // center vert
    message = message + "<div style='text-align:center;margin:0px;padding:10px;width:auto;background:white;color:black;font-size:90%;'>";

    // this is the message displayed to the user.
    message = message + "<?php _l('cookie_warning_message'); ?>";

    // Displays the I agree/disagree buttons.
    // Feel free to change the address of the I disagree redirection to either a non-cookie site or a Google or the ICO web site 
    message = message + "<br /><INPUT TYPE='button' VALUE='<?php _l('I Agree'); ?>' onClick='JavaScript:doAccept();' /> <INPUT TYPE='button' VALUE=\"<?php _l('I dont agree'); ?>\" onClick='JavaScript:doNotAccept("
	message = message + c_action;
	message = message + ");' />";

    // and this closes everything off.
    message = message + "</div></div>";

    document.writeln(message);
}
</script>


<div class="top-wrapper">
      <div class="container">
            <script src="assets/js/cookiewarning4.js"></script>
      </div> <!-- /.container -->
</div>
<?php endif; ?>

<?php _widget('custom_palette'); ?>
<?php _widget('header_loginmenu'); ?>
<?php _widget('header_mainmenu'); ?>




</div>