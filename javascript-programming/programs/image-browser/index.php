<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Image Slide Show";
$description = "Write a JavaScript program to create image slideshow.<br><br>


Create a slideshow with the group of four images, also simulate the next and previous transition between slides in your JavaScript.";
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
          <div class="bread-title"><h2>JavaScript Program to Create Image Slide Show</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create Image Slide Show</h2>
				<p>Write a JavaScript program to create image slideshow.<br><br>


Create a slideshow with the group of four images, also simulate the next and previous transition between slides in your JavaScript.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Image SlideShow&lt;/title&gt;
    &lt;script&gt;
    var images = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg"];

    var count = 0;
    function previousImage() 
    {
        if(count!=0)
            count--;
        var id = document.getElementById("imageId");
        id.src = "images/" + images[count];
    }

    function nextImage() {
        if(count!=4)
            count++;
        var id = document.getElementById("imageId");
        id.src = "images/" + images[count];
    }
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
    &lt;img id="imageId" src="images/01.jpg" width="300" height="200"/&gt;&lt;br/&gt;
    &lt;hr&gt;
    &lt;input type="button" value="&lt; Prev Image" onclick="previousImage()"/&gt;
    &lt;input type="button" value="Next Image &gt;" onclick="nextImage()"/&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="image-browser.jpg"></code></pre>
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