</div>
<!-- Form area -->
<div class="admin-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget widget-theme-color worange login-area">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> <?php echo lang('Login')?> 
              </div>

              <div class="widget-content">
                <div class="padd">
                
                <?php echo validation_errors()?>
                <?php if($this->session->flashdata('error')):?>
                <p class="label label-important validation"><?php echo $this->session->flashdata('error')?></p>
                <?php endif;?>
                
                  <!-- Login form -->
                  <?php echo form_open(NULL, array('class' => 'form-horizontal'))?>
                    <!-- Email -->
                    <div class="form-group">
                      <div class="col-lg-12">
                         <i class="icon-user"></i> 
                        <?php echo form_input('username', NULL, 'class="form-control" id="inputUsername" placeholder="'.lang('Username').'"')?>
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <div class="col-lg-12">
                          <i class="icon-key"></i>
                        <?php echo form_password('password', NULL, 'class="form-control" id="inputPassword" placeholder="'.lang('Password').'"')?>
                      </div>
                    </div>
                    <!-- Remember me checkbox and sign in button -->
                    <div class="form-group">
          <div class="col-lg-6 remember-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember" id="remember" value="true" /> <?php echo lang('Remember me')?>
                        </label>
            </div>
          </div>
          <div class="col-lg-6 txt-right pr-0">
                        <a href="<?php echo site_url('admin/user/forgetpassword')?>"><?php echo lang_check('Forget password?')?></a>
                        </div>  
          </div>
                        <div class="col-lg-12 loginbtngroup">
              <button type="submit" class="btn btn-danger themebtn"><?php echo lang('Login')?></button>
            </div>
                  <?php echo form_close()?>
          
                <?php if(config_item('app_type') == 'demo'):?>
                <p class="label label-info validation"><?php echo lang_check('Admin creditionals: admin, admin')?></p>
                <p class="label label-info validation"><?php echo lang_check('Agent creditionals: agent, agent')?></p>
                <?php endif;?>
                  
        </div>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
<style type="text/css">
  body{
    background: #fff !important;
  }
</style>