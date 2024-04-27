<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Demonstrate Mouse Text Over Effect and Button Click Event";
$description = "Write a JavaScript program to demonstrate mouse text over effect and button click event.";
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
          <div class="bread-title"><h2>JavaScript Program to Demonstrate Mouse Text Over Effect and Button Click Event</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Demonstrate Mouse Text Over Effect and Button Click Event</h2>
				<p>Write a JavaScript program to demonstrate mouse text over effect and button click event.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt; 
&lt;head&gt;
    &lt;title&gt;Mouse text over effect&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt; 
&lt;button id="btn"&gt;Click here&lt;/button&gt; 

&lt;p id="para" onmouseover="mouseOver()" onmouseout="mouseOut()"&gt;Hover over this Text !&lt;/p&gt; 

&lt;b id="output"&gt;&lt;/b&gt; 

    &lt;script&gt;
        var x = document.getElementById("btn"); 

        x.addEventListener("click", btnClick); 

        function mouseOver() 
        { 
            document.getElementById("output").innerHTML += "MouseOver Event" + "&lt;br&gt;"; 
        } 

        function mouseOut() 
        { 
            document.getElementById("output").innerHTML += "MouseOut Event" + "&lt;br&gt;"; 
        } 

        function btnClick() 
        { 
            document.getElementById("output").innerHTML += "Click Event" + "&lt;br&gt;"; 
        } 
    &lt;/script&gt;
&lt;/body&gt; 

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="mouse-events.jpg"></code></pre>
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