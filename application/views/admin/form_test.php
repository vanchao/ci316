<?php include_once("header.php"); ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<?php include_once("content_header.php"); ?>
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
<?php

// Open form and set URL for submit form
echo form_open(site_url('admin/form_test'));

// Show Name Field in View Page
echo form_label('User Name :', 'u_name');
$data= array(
'name' => 'u_name',
'placeholder' => 'Please Enter User Name',
'class' => 'input_box'
);
echo form_input($data);

// Show Email Field in View Page
echo form_label('User email:', 'u_email');
$data= array(
'type' => 'email',
'name' => 'u_email',
'placeholder' => 'Please Enter Email Address',
'class' => 'input_box'
);
echo form_input($data);
?>

<?php
$data = array(
'type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'
);
echo form_submit($data); ?>

<?php echo form_close();?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once("content_footer.php"); ?>
<?php include_once("content_side_bar.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->

<?php include_once("footer.php"); ?>
