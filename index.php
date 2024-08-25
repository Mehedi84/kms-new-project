<?php
include('./libs/db.php');
include('./libs/functions.php');
$titleHeader  = remove_dash($_GET['p']);
## check logged in and redirect back
if ($_SESSION['full_name'] == "") {
	header('Location: actions/logout_action.php');
}
// $titleHeader  = remove_dash($_GET['p']);
?>

  <?php	include("layouts/header.php");?>
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <?php	include("layouts/sidebar.php");?>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
      <!-- Container-fluid starts-->
        <?php
        include('layouts/control.php');
        ?>
      <!-- Container-fluid Ends-->
    </div>
    <!-- footer start-->
    <?php
        include('layouts/footer.php');
      ?>