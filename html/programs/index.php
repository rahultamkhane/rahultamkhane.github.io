<?php 
require("../../libs/config.php");
$title = "HTML Programs | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains programs of HTML Programs. You can take the references from these programs and try them on your own.";
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
              <li><a href="<?php echo SITE_DIR;?>html/programs/">HTML</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>All Programs</h2></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<div class="container">
<div class="row">
	
    <?php 
	include("html_programs_navigation.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
      <ol class="custom-counter">
        <li><a href="create-first-webpage">HTML Program to Create First Webpage</a></li>
        <li><a href="display-it-compamy-name">HTML program to display name of any IT company you know</a></li>
        <li><a href="show-different-types-of-headings">HTML Program to Demonstrate Different Types of HTML Headings</a></li>
        <li><a href="headings-with-different-alignments">HTML Program to display HTML headings with Different Alignments</a></li>
        <li><a href="block-level-tags">HTML program to use block level tags</a></li>
        <li><a href="text-level-tags-and-special-symbols">HTML program for using text level tags and special symbols</a></li>
        <li><a href="html-different-types-of-lists">HTML program to demonstrate different types of lists</a></li>
        <li><a href="link-external-page-to-different-websites">HTML program to link an external page of different web sites and link web page to your mail address</a></li>
        <li><a href="webpage-background-image">HTML program to design a web page which include image hyperlink and set any image as a background to the page</a></li>
        <li><a href="display-flags-of-different-countries">HTML program to display flags of different countries using image tag</a></li>
        <li><a href="marquee-tag">HTML program to demonstrate use of MARQUEE tag</a></li>
        <li><a href="divide-webpage-using-frameset">HTML program to divide a web page into 2 rows and second into 3 columns using frameset</a></li>
        <li><a href="static-webpage-using-table-tags">HTML program to create a static webpage using table tag</a></li>
        <li><a href="create-time-table-using-table-tag">HTML program to create Time Table using HTML table tag</a></li>
        <li><a href="text-formatting-tags-tabular">HTML program to create a static web page which defines all text formatting tags of HTML in tabular format</a></li>
        <li><a href="using-css-in-webpage">HTML program to develop a web page using CSS for website page</a></li>
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