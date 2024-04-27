<?php 
require("../../../libs/config.php");
$title = "JavaScript Program for Moving Car Animation";
$description = "Write a JavaScript program for moving car animation.";
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
          <div class="bread-title"><h2>JavaScript Program for Moving Car Animation</h2></div>
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
				<h2 class="blog-title">JavaScript Program for Moving Car Animation</h2>
				<p>Write a JavaScript program for moving car animation.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Moving car animation&lt;/title&gt;
    &lt;script type="text/javaScript"&gt;
        var t;
        var pos = 0;
        function init()
        {
            t = setInterval('moveCar()', 100);
        }
        function moveCar()
        {
            var car = document.getElementById('car');
            pos += 10;
            car.style.left = pos + 'px';
        }
        function stopCar()
        {
            clearTimeout(t);
            pos = 0;
            car.style.left = pos + 'px';
            car.style.right = pos + 'px'
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;img id="car" src="images/car.png" width="150" height="100" style="position: absolute; left: 0px; top: 0px;"&gt;&lt;/img&gt;
&lt;input type="button" value="Start" onclick="init()" style="position: absolute; top:150px;"/&gt;
&lt;input type="button" value="Stop" onclick="stopCar()" style="position: absolute; top:150px; left: 70px;"/&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="car-animation.jpg"></code></pre>
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