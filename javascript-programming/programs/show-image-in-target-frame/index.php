<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Show Image Selected Image in Second Frame";
$description = "Write a JavaScript program to show image selected image in second frame.";
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
          <div class="bread-title"><h2>JavaScript Program to Show Image Selected Image in Second Frame</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Show Image Selected Image in Second Frame</h2>
				<p>Write a JavaScript program to show image selected image in second frame.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Calling child window JS function&lt;/title&gt;
&lt;/head&gt;
&lt;frameset rows="25%, *"&gt;
    &lt;frame src="webpage1.html" name="topPage"/&gt;
    &lt;frame src="webpage2.html" name="bottomPage"/&gt;
&lt;/frameset&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Add border to image on click&lt;/title&gt;
    &lt;script&gt;
        function changeImage(img, name)
        {
            parent.bottomPage.targetImage.src=name+".jpg";
            for(i=1; i&lt;=3;i++) 
            {
                document.getElementById('i'+i).border="0";
            }
            img.border = "4";
        }
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
    &lt;img src="nature1.jpg" id="i1" name="image1" width="100" height="100" alt="image1.jpg" onclick="changeImage(this, 'nature1')"/&gt;

    &lt;img src="nature2.jpg" id="i2" name="image2" width="100" height="100" alt="image2.jpg" onclick="changeImage(this, 'nature2')"/&gt;

    &lt;img src="nature3.jpg" id="i3" name="image3" width="100" height="100" alt="image3.jpg" onclick="changeImage(this, 'nature3')"/&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Webpage 2&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;img name="targetImage" alt="No image selected"/&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="show-image-in-target-frame.jpg"></code></pre>
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