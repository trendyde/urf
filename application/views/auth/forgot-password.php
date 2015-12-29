<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?= base_url('auth/forgot_password'); ?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?=base_url('assets/images/login-logo.png'); ?>" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Forgot Password?</p>
          </div>
        </div>
        <?php
        if(isset($message)) {
          ?>
          <div class="row margin">
            <p class="center materialize-red-text"><?=$message; ?>
          </div>
          <?php
        }
        ?>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="emailid" name="emailid"  type="text">
            <label for="emailid" class="center-align">Email ID</label>
            <?php echo form_error('emailid', '<span style="color:red">', '</span>'); ?>
          </div>
        </div>
        
        
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" value="Reset Password" class="btn waves-effect waves-light col s12">Reset Password</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="<?=base_url('auth/login'); ?>">Back to Login</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>