<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Print Day from Date of Birth";
$description = "Write a JavaScript program to print day from date of birth. This program will accept the date of birth of user and after that it will display the day of birth.
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
          <div class="bread-title"><h2>JavaScript Program to Print Day from Date of Birth</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Print Day from Date of Birth</h2>
				<p>Write a JavaScript program to print day from date of birth. This program will accept the date of birth of user and after that it will display the day of birth.
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
    &lt;title&gt;Print day of birth&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    var dob = prompt("Enter your Date of Birth (e.g. November 27, 2001)", "Month DD, YYYY");
    var day = new Date(dob).getDay();

    switch(day)
    {
        case 0: document.write("You was born on &lt;B&gt;Sunday&lt;/B&gt;");
            break;
        case 1: document.write("You was born on &lt;B&gt;Monday&lt;/B&gt;")
            break;
        case 2: document.write("You was born on &lt;B&gt;Tuesday&lt;/B&gt;")
            break;
        case 3: document.write("You was born on &lt;B&gt;Wednesday&lt;/B&gt;")
            break;
        case 4: document.write("You was born on &lt;B&gt;Thursday&lt;/B&gt;")
            break;
        case 5: document.write("You was born on &lt;B&gt;Friday&lt;/B&gt;")
            break;
        case 6: document.write("You was born on &lt;B&gt;Saturday&lt;/B&gt;")
            break;
        default:
            document.write("Please enter input in given format..");
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
					<pre><code class="plaintext"><img src="print-day-of-birth.jpg"></code></pre>
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