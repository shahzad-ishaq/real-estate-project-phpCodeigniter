<!-- Page heading -->
<div class="page-head">
<!-- Page heading -->
    <h2 class="pull-left"><?php echo lang('Import estates')?>
              <!-- page meta -->
              <span class="page-meta"><?php echo lang('import_csv')?></span>
            </h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="<?php echo site_url('admin')?>"><i class="icon-home"></i> <?php echo lang('Home')?></a> 
      <!-- Divider -->
      <span class="divider">/</span> 
      <a class="bread-current" href="<?php echo site_url('admin/estate')?>"><?php echo lang('Estates')?></a>
    </div>

            <div class="clearfix"></div>

</div>
<!-- Page heading ends -->

<div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="widget wgreen">
                <div class="widget-head">
                  <div class="pull-left"><?php echo lang_check('Import data')?></div>
                  <div class="widget-icons pull-right">
                    <a class="wminimize" href="#"><i class="icon-chevron-up"></i></a> 
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    <?php echo validation_errors()?>
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="label label-important validation"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php endif;?>
                    <?php if(!empty($error)):?>
                    <p class="label label-important validation"> <?php echo $error; ?> </p>
                    <?php endif;?>
                    <?php if(!empty($message)):?>
                    <p class="label label-important validation"> <?php echo $message; ?> </p>
                    <?php endif;?>
                    <hr />
                    <!-- Form starts.  -->
                    <?php echo form_open_multipart(NULL, array('class' => 'form-horizontal', 'role'=>'form'))?>                              
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo lang('CSV Url')?></label>
                          <div class="col-lg-10">
                            <?php echo form_input('csv_url', '', 'class="form-control" id="inputMinStay" placeholder="'.lang('CSV Url').'"')?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo lang_check('CSV File')?></label>
                          <div class="col-lg-10">
                            <input id="userfile_xml" type="file" name="userfile_csv" size="20" />
                          </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-lg-2 control-label"><?php echo lang_check('Max images per property')?></label>
                            <div class="col-lg-10">
                                  <?php echo form_input('max_images', $this->input->post('max_images') ? $this->input->post('max_images') : '1', 'class="form-control ui-state-valid"');?>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="inputGoogle_gps"><?php echo lang_check('Use Google API, if gps are not available.')?></label>
                          <div class="col-lg-10">
                          <?php echo form_checkbox('google_gps', '1', false, 'id="inputGoogle_gps"')?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"><?php echo lang_check('Overwrite existing')?></label>
                          <div class="col-lg-10">
                          <?php echo form_checkbox('overwrite_existing', '1', false, 'id="root_country" checked')?>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <?php echo form_submit('submit', lang_check('Import'), 'class="btn btn-primary"')?>
                            <a href="<?php echo site_url('admin/estate')?>" class="btn btn-default" type="button"><?php echo lang('Cancel')?></a>
                          </div>
                        </div>
                    <?php echo form_close()?>
                </div>
            </div>
                <div class="widget-foot">
<?php if(isset($imports)): ?>                     
    <p><?php _l('Added/Overwrited'); ?>: <?php echo sw_count($imports);?></p>
    <p><?php _l('Skipped'); ?>: <?php echo $skipped;?></p>
<?php endif; ?>
    
        <?php if (!empty($imports)): ?>
        <p><?php _l('Update/Import completed'); ?>:</p>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th><?php _l('Address'); ?></th>
            </tr>
            <?php foreach ($imports as $item): ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td> <a href="<?php echo site_url('admin/estate/edit/'.$item['preview_id']); ?>"><?php echo $item['address']; ?></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p><?php _l('Example CSV file'); ?>:</p>
        <br />
        <a class="label label-warning" target="_blank" href="http://iwinter.com.hr/support/?p=7867"><?php _l('Examples and guides'); ?></a>
        <br /><br />
        <pre>
    <img src='<?php echo base_url('admin-assets/img/example_csv.jpg') ?>' style="max-width: 100%;">
        </pre>
    <?php endif; ?>
            </div>
        </div>  
      </div>
    </div>
</div>
</div>
<script>

/* CL Editor */
$(document).ready(function(){
    $(".cleditor2").cleditor({
        width: "auto",
        height: 250,
        docCSSFile: "<?php echo $template_css?>",
        baseHref: '<?php echo base_url('templates/'.$settings['template'])?>/'
    });
});

</script>