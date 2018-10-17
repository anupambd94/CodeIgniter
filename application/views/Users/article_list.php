
<?php include('header.php');?>

<div class="container" style="margin-top:50px;">

  <?php echo form_open('admin/index'); ?>
    <fieldset>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <h1>Admin Login</h1>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email">Username</label>

                <?php echo form_input(['class'=>'form-control','name'=>'uname','placeholder'=>'Enter username','id'=>'username','type'=>'text']); ?>
              </div>

            </div>
            <div class="col-lg-6">
              <label type="hidden"></label><br>
              <?php echo form_error('uname',"<div class='text-danger'>","</div>");?>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="password">Password</label>
                <?php echo form_password(['class'=>'form-control','name'=>'pass','placeholder'=>'Enter password','id'=>'password']); ?>
              </div>

            </div>
            <div class="col-lg-6">
              <label type="hidden"></label><br>
              <?php echo form_error('pass',"<div class='text-danger'>","</div>");?>
            </div>

          </div>


          <fieldset class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <?php echo form_checkbox(['class'=>'form-check-input','type'=>'checkbox']); ?>
                Remember me
              </label>
            </div>
          </fieldset>
          <?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'Login']); ?>
          <?php echo form_reset(['class'=>'btn btn-danger','type'=>'reset','value'=>'Reset']); ?>

        </div>

      </div>


    </fieldset>
  </form>
</div>


 <?php include('footer.php');?>
