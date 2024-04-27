<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Horizontal Frames.";
$description = "Write a JavaScript program to create horizontal frames.";
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
              <li><a href="<?php echo SITE_DIR;?>javascript-programming/">JavaScript Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>javascript-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>JavaScript Program to Create Horizontal Frames.</h2></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<section class="news-area archive blog-single section-padding">
	<div class="container">
		<div class="row">
		
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/leftbar.php");
?>
	
	<div class="col-sm-8">
		<div class="blog-single-main">
			<div class="blog-detail">
				<h2 class="blog-title">JavaScript Program to Create Horizontal Frames.</h2>
				<p>Write a JavaScript program to create horizontal frames.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create Horizontal Frames&lt;/title&gt;
&lt;/head&gt;
&lt;frameset rows="20%, *, 30%"&gt;
    &lt;frame src="frame1.html" name="f1"&gt;
    &lt;frame src="frame2.html" name="f2"&gt;
    &lt;frame src="frame3.html" name="f3"&gt;
&lt;/frameset&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Frame 1&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Webpage 1&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Frame 2&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Webpage 2&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Frame 3&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Webpage 3&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="horizontal-frames-2.jpg"></code></pre>
				</div>
				<!-- DESC -->

			<br>
      
			<?php 
				include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/feedback.php");
			?>

			<br>
			<?php 
				include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
			?>
			<br>
		</div> <!-- /col-sm-8 -->	
<?php 
include$_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php";
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>