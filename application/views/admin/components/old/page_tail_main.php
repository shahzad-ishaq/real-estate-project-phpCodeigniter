<!-- Notification box ends -->   

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<?php if(true):?>
<div id="modal-gallery" class="modal modal-gallery fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-image"></div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary modal-next"><?php echo lang('next')?> <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> <?php echo lang('previous')?></a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> <?php echo lang('slideshow')?></a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> <?php echo lang('download')?></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endif;?>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">&lsaquo;</a>
    <a class="next">&rsaquo;</a>
    <a class="close">&times;</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>




<script src="<?php echo base_url('admin-assets/js/ckeditor_4.6.2_standard/ckeditor/ckeditor.js')?>"></script>
<script>
CKEDITOR.config.contentsCss =[ "<?php echo base_url('templates/'.$settings['template'].'/assets/css/custom.css')?>" <?php if(isset($template_css) && !empty($template_css)):?>, "<?php echo $template_css?>"<?php endif;?> ];  
CKEDITOR.config.baseHref =  "<?php echo base_url('templates/'.$settings['template'])?>/"
CKEDITOR.addCss(
            '.row {' +
                'margin-left: 0;' +
                'margin-right: 0' +
            '}' +
            '.row {' +    
                'display: table;' +
                'content: "";' +
                'clear: both;' +
            '}'
        );
CKEDITOR.config.forcePasteAsPlainText = false; // default so content won't be manipulated on load
CKEDITOR.config.basicEntities = true;
CKEDITOR.config.entities = true;
CKEDITOR.config.entities_latin = false;
CKEDITOR.config.entities_greek = false;
CKEDITOR.config.entities_processNumerical = false;
CKEDITOR.config.fillEmptyBlocks = function (element) {
        return true; // DON'T DO ANYTHING!!!!!
}; 
CKEDITOR.config.allowedContent = true; // don't filter my data 
CKEDITOR.dtd.a.div = 1;
CKEDITOR.dtd.a.p = 1;
CKEDITOR.config.protectedSource.push(/<i[^>]*><\/i>/g);
CKEDITOR.config.extraAllowedContent = 'p(*)[*]{*};div(*)[*]{*};li(*)[*]{*};ul(*)[*]{*}';
CKEDITOR.dtd.$removeEmpty['i'] = false;

$(document).ready(function(){
    $("form").submit( function(e) {
        if($(this).find('.ckeditor').length){
            var flag_text_error = false;
            $(this).find('.ckeditor').each(function(){
                if($(this).attr('data-required')== 'true') {
                    var id = $(this).attr('id');
                    var messageLength = CKEDITOR.instances[id].getData().replace(/<[^>]*>/gi, '').length;
                    if( !messageLength ) {
                        $('#cke_'+id).addClass('fiedt_error');
                        if(!flag_text_error && $('.tab-pane.active #cke_'+id).length){
                            $('html, body').animate({
                                scrollTop: ($('#cke_'+id).offset().top-200) + 'px'
                            }, 1000, 'swing');
                            flag_text_error = true;
                        }
                        e.preventDefault();
                    }
                }
            })
            flag_text_error = false;
        }
    })
    
    if($('.ckeditor').length){
       setTimeout( function() {
            $('.ckeditor').each(function(){
                if($(this).attr('data-required')== 'true') {
                    var id = $(this).attr('id');
                    CKEDITOR.instances[id].on('change', function() {
                        var messageLength = CKEDITOR.instances[id].getData().replace(/<[^>]*>/gi, '').length;
                        if( !messageLength ) {
                            $('#cke_'+id).addClass('fiedt_error');
                        } else {
                            $('#cke_'+id).removeClass('fiedt_error');
                        }
                    });
                }
            })
        }, 1000);
        
    }
})



// *only* if we have anchor on the url
if(typeof location_hash !== 'undefined' && location_hash != '' && $(location_hash).length ) {
    setTimeout( function() { 
        $('html, body').animate({
            scrollTop: ($(location_hash).offset().top-100) + 'px'
        }, 1000, 'swing');
    }, 1000);
    // smooth scroll to the anchor id
}
</script>

</body>
</html>