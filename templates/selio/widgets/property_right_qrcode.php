<?php if(file_exists(APPPATH.'libraries/Pdf.php')) : ?>
<div class="widget widget-posts">
    <div class="content-box pt0 text-left">
        <img style="margin-left: -7px;max-width: 100%;" src="http://chart.apis.google.com/chart?cht=qr&chs=180x180&chld=L|0&chl={page_current_url}&choe=UTF-8" alt="<?php echo lang_check('QR code');?>"/>
    </div>
</div><!--widget-posts end-->
<?php endif;?>