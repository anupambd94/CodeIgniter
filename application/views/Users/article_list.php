
<?php include('header.php');?>

<div class="container" style="margin-top:20px;">
  <h1>Admin Login</h1>
  <?php echo form_open('admin/index'); ?>
    <fieldset>

      <div class="form-group">
        <label for="email">Username</label>

        <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter username','id'=>'username','type'=>'text']); ?>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter password','id'=>'password']); ?>

      </div>


      <fieldset class="form-group">
        <div class="form-check">
          <label class="form-check-label">
            <?php echo form_checkbox(['class'=>'form-check-input','type'=>'checkbox']); ?>
            Remember me
          </label>
        </div>
      </fieldset>
      <?php echo form_submit(['class'=>'btn btn-primary','type'=>'submit','value'=>'submit']); ?>
      <?php echo form_reset(['class'=>'btn btn-danger','type'=>'reset','value'=>'Reset']); ?>
    </fieldset>
  </form>
</div>


 <?php include('footer.php');?>
