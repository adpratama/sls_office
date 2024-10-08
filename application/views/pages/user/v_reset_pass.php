<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>
          Reset Password
        </h3>
      </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input Password
              <small>Please fill below
              </small>
            </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link">
                  <i class="fa fa-chevron-up">
                  </i>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-wrench">
                  </i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">Settings 1
                    </a>
                  </li>
                  <li>
                    <a href="#">Settings 2
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="close-link">
                  <i class="fa fa-close">
                  </i>
                </a>
              </li>
            </ul>
            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <br />
            <?php echo form_open_multipart('app/resetpass/' . $this->uri->segment(3), 'class="form-horizontal form-label-left" name="form_input" id="form_input"'); ?>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">New Password
                <span class="">*
                </span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password_new" id="password_new" class="form-control col-md-7 col-xs-12" value="<?= set_value('password_new') ?>">
                <?= form_error('password_new') ?>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Verified Password
                <span class="required">*
                </span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password_v" id="password_v" class="form-control col-md-7 col-xs-12">
                <?= form_error('password_v') ?>
              </div>
            </div>

            <div class="ln_solid">
            </div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button class="btn btn-primary" type="button" onclick="window.location.href='<?php echo base_url(); ?>app/user';">Cancel</button>

                <button name="save_password" id="btn-submit" type="submit" class="btn btn-success">Save</button><br><br><br>
                <!--<input type="submit" value="Save Customer" class="btn btn-success"/><br><br><br>-->
                <?php //echo form_submit('save_customer', 'Save Customer', 'onclick="return clicked();", class="btn btn-success"'); 
                ?>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>