<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Pulldown Menu and After Clicking Open Selected Website";
$description = "Write a JavaScript program to create pulldown menu and after clicking open selected website.<br><br>


Write a JavaScript to create a pull – down menu with three options [google, msbte, yahoo] once the user will select one of the options then user will be redirected to that site.";
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
          <div class="bread-title"><h2>JavaScript Program to Create Pulldown Menu and After Clicking Open Selected Website</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create Pulldown Menu and After Clicking Open Selected Website</h2>
				<p>Write a JavaScript program to create pulldown menu and after clicking open selected website.<br><br>


Write a JavaScript to create a pull – down menu with three options [google, msbte, yahoo] once the user will select one of the options then user will be redirected to that site.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Creating Pull-down menu&lt;/title&gt;
    &lt;script&gt;
        function gotoWebsite(choice)
        {
            url = choice.options[choice.selectedIndex].value
            if(url != "")
            {
                window.location = url
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form action="" name="form1"&gt;
    Select your favourite website: 
    &lt;select name="website" onchange="gotoWebsite(this)"&gt;
        &lt;option value="http://www.google.com"&gt;Google&lt;/option&gt;
        &lt;option value="http://www.yahoo.com"&gt;Yahoo&lt;/option&gt;
    &lt;option value="http://www.msbte.org.in"&gt;MSBTE&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="pull-down-menu-website.jpg"></code></pre>
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