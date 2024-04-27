<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Show Large Image on mouse rollover image";
$description = "Write a JavaScript program to Show Large Image on mouse rollover image.";
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
          <div class="bread-title"><h2>JavaScript Program to Show Large Image on mouse rollover image</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Show Large Image on mouse rollover image</h2>
				<p>Write a JavaScript program to Show Large Image on mouse rollover image.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create a rollover images example&lt;/title&gt;
    &lt;script&gt;
        function changeImage(im, x)
        {
            arr = document.images
            for(i=0; i&lt;arr.length-1; i++)
            {
                arr[i].border = "0"
            }
            document.getElementById('target').src = im.src
            arr[x].border ="4"
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
    &lt;img src="apple.gif" width="60" onmouseover="changeImage(this, 0)"/&gt;
    &lt;img src="mango.gif" width="60" onmouseover="changeImage(this, 1)"/&gt;
    &lt;img src="grapes.gif" width="60" onmouseover="changeImage(this, 2)"/&gt;
&lt;/center&gt;
&lt;br/&gt;
&lt;img src="" id="target" alt="No image selected"/&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="show-large-image-on-rollover.jpg"></code></pre>
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