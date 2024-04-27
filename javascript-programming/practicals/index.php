<?php 
require("../../libs/config.php");
$title = "JavaScript Practicals | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains practicals of JavaScript Programming. You can take the references from these programs and try them on your own.";
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/header.php");
?>

<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/navbar.php");
?>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="bread-inner">
          <!-- Bread Menu -->
          <div class="bread-menu">
            <ul>
              <li><a href="<?php echo SITE_DIR;?>">Home</a></li>
              <li><a href="<?php echo SITE_DIR;?>javascript-programming/practicals/">JavaScript Practicals</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>All Practicals</h2></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<div class="container">
<div class="row">
	
    <?php 
	include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/leftbar.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
		<h1 class="text-3">JavaScript Practicals</h1><br>
      <ol class="custom-counter">
		<li><a href="arithmetic-expression-evaluation">Write a simple JavaScript with HTML for Arithmetic Expression evaluation and message printing.</a></li>
		<li><a href="decision-making-looping">Develop JavaScript to use Decision making and Looping statement.</a></li>
		<li><a href="javascript-array">Develop JavaScript to implement Array functionalities.</a></li>
		<li><a href="javascript-functions">Develop JavaScript to implement Functions.</a></li>
		<li><a href="javascript-strings">Develop JavaScript to implement strings.</a></li>
		<li><a href="form-elements">Create a webpage using Form elements.</a></li>
		<li><a href="form-events-1">Create a webpage to implement Form Events. Part-I</a></li>
		<li><a href="form-events-2">Create a webpage to implement Form Events. Part-II</a></li>
		<li><a href="intrinsic-functions">Develop a webpage using Intrinsic Java Functions.</a></li>
		<li><a href="javascript-cookie">Develop a webpage for creating session and  persistent cookies. Observe the effects with Browser cookie settings.</a></li>
		<li><a href="working-with-child-window">Develop a webpage for placing the window on the screen and working with child window.</a></li>
		<li><a href="regular-expression">Develop a webpage for validation of form fields using regular expressions.</a></li>
		<li><a href="#">Develop a webpage with Rollovers effect.</a></li>
		<li><a href="implementing-menus">Develop a webpage for implementing Menus.</a></li>
		<li><a href="#">Develop a webpage for implementing Status bars and Web Page Protection.</a></li>
		<li><a href="implementing-slideshow-banner">Develop a webpage for implementing Slideshow, banner.</a></li>
      </ol>
		</div> <!-- /container -->	
  </div> <!-- /col-sm-8 -->
	
	<?php 
	include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
	?>
	
    </div>	<!-- /row -->
	
    </div> <!-- /container-fluid -->
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>