<?php 
require("../../libs/config.php");
$title = "Java Applet Programs | ".SITE_NAME;
$description = "The best way to learn any programming langugae is by practicing examples. This page contains Java Applet programs. You can take the references from these programs and try them on your own.";
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
              <li><a href="<?php echo SITE_DIR;?>java-applet/programs/">Java Applet</a></li>
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
	include("java_applet_programs_navigation.php");
	?>
	
	<div class="col-sm-8 pl-5 pt-4">
    <!-- Page Content -->
		<div class="container">
      <ol class="custom-counter">
		<li><a href="hello-world">Java Applet Program to display "Hello World !" on Applet Window</a></li>
		<li><a href="hello-world-applet">Java Applet Program to Display "Hello World!"</a></li>
		<li><a href="applet-life-cycle">Java Applet Program to demonstrate Applet Life Cycle methods</a></li>
		<li><a href="draw-lines">Java Applet Program to draw lines</a></li>
		<li><a href="draw-arcs">Java Applet Program to draw and fill Arcs</a></li>
		<li><a href="draw-ellipses">Java Applet Program to draw Ellipses</a></li>
		<li><a href="draw-rectangles">Java Applet Program to draw and fill Rectangle</a></li>
		<li><a href="draw-fill-polygon">Java Applet Program to draw and fill Polygon</a></li>
		<li><a href="draw-polygons">Java Applet Program to draw and fill Polygon</a></li>
		<li><a href="applet-different-shapes">Java Applet Program to Draw Different Shapes</a></li>
		<li><a href="filled-triangle-applet">Java Applet Program to draw and fill Triangle</a></li>
		<li><a href="three-circle-applet">Java Applet Program to Draw Three Coloured Circles</a></li>
		<li><a href="font-demo-applet">Java Applet Program to demonstrate Font class methods</a></li>
		<li><a href="celsi-fahr-applet">Java Applet Program for Celsius to Fahrenheit Conversion</a></li>
		<li><a href="concentric-circles-colored">Java Applet Program for Concentric Circles</a></li>
		<li><a href="control-loop-applet">Java Applet Program to Create Alternate Filled Circle after Empty Circle </a></li>
		<li><a href="print-1-10-numbers-applet">Java Applet Program to Print First Ten Numbers</a></li>
		<li><a href="applet-passing-parameter">Java Applet Program to Pass Parameter to an Applet</a></li>
		<li><a href="char-count-param">Java Applet Program to Count String Length</a></li>
		<li><a href="concentric-circles">Java Applet Program to display Three Concentric Circles</a></li>
		<li><a href="applet-bar-chart">Java Applet Program to Show Bar Chart</a></li>
		<li><a href="set-back-color">Java Applet Program to Set Background Color</a></li>
		<li><a href="digital-clock">Java Applet Program for Digital Clock</a></li>
		<li><a href="analog-clock">Java Applet Program for Analog Clock</a></li>
		<li><a href="text-anim-applet">Java Applet program for Text Animation</a></li>
		<li><a href="moving-banner-text">Java Applet Program to Create Moving Banner Text</a></li>
		<li><a href="box-circle-animation">Java Applet Program for Box and Circle Animation</a></li>
		<li><a href="rolling-banner">Java Applet Program to Display Rolling Banner Using repaint( ) Method of an Applet</a></li>
		<li><a href="signal-control-applet">Java Applet Program for Traffic Signal Animation</a></li>
		<li><a href="random-draw-text-applet">Java Applet Program to Draw Random text at Random Location in Random Color</a></li>
      </ol>
		</div> <!-- /container -->	
  </div> <!-- /col-sm-8 -->
	
	<?php 
	include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
	?>
	
    </div>	<!-- /row -->
	
    </div> <!-- /container -->
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>