<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Display Current Month";
$description = "Write a JavaScript program to display current month. This program will read date and after that it will display the month of the year.
";
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
          <div class="bread-title"><h2>JavaScript Program to Display Current Month</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Display Current Month</h2>
				<p>Write a JavaScript program to display current month. This program will read date and after that it will display the month of the year.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;

&lt;head&gt;
    &lt;title&gt;Display current month&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h3&gt;Current month&lt;/h3&gt;
&lt;p id="day"&gt;&lt;/p&gt;
&lt;script type="text/javascript"&gt;
    switch(new Date().getMonth())
    {
        case 0: document.write("January");  break;
        case 1: document.write("February");  break;
        case 2: document.write("March");  break;
        case 3: document.write("April");  break;
        case 4: document.write("May");  break;
        case 5: document.write("June");  break;
        case 6: document.write("July");  break;
        case 7: document.write("August");  break;
        case 8: document.write("September");  break;
        case 9: document.write("Octobar");  break;
        case 10: document.write("November");  break;
        case 11: document.write("December");  break;
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
					<pre><code class="plaintext"><img src="display-month.jpg"></code></pre>
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