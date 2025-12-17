<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management | Login</title>
  <link rel="icon" type="image/png"href="<?php echo base_url('assets/images/ems logo.jpg'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/images/ems logo.jpg'); ?>" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/ems logo.jpg'); ?>" type="image/x-icon">



  <!-- Responsive -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">

  <!-- ✅ LOGIN BACKGROUND STYLE -->
  <style>
    .login-page {
      background: url("<?php echo base_url('assets/images/login page.jpg'); ?>")
                  no-repeat center center fixed;
      background-size: cover;
    }

    /* Dark overlay for readability */
    .login-page::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.45);
      z-index: -1;
    }

    .login-box {
      position: relative;
      z-index: 2;
    }

    .login-logo a {
      color: #ffffff;
      font-weight: bold;
    }

    .login-box-body {
      border-radius: 6px;
    }
  </style>
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Employee</b> Management System</a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Please Login To Continue</p>

    <?php echo form_open('Home/login'); ?>

      <div class="form-group has-feedback">
        <input type="text" name="txtusername" class="form-control"
               placeholder="Admin / Staff Email" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="txtpassword" class="form-control"
               placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <?php echo $this->session->flashdata('login_error'); ?>

      <div class="row">
        <div class="col-xs-4 pull-left">
          <button type="submit" class="btn btn-success btn-block btn-flat">
            Sign In
          </button>
        </div>
      </div>

    </form>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>

</body>
</html>
