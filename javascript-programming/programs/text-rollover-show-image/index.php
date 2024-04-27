<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Show Image on Text Rollover";
$description = "Write a JavaScript program to Show Image on Text Rollover.";
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
          <div class="bread-title"><h2>JavaScript Program to Show Image on Text Rollover</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Show Image on Text Rollover</h2>
				<p>Write a JavaScript program to Show Image on Text Rollover.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create a text rollover example&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;TABLE border="0"&gt;
        &lt;TR valign="top"&gt;
            &lt;TD width="80"&gt;
                &lt;A&gt;
                    &lt;IMG src="apple.gif" width="150" border="0" name="fruit"&gt;
                &lt;/A&gt;
            &lt;/TD&gt;
            &lt;TD&gt;
                &lt;IMG src="" width="10"&gt;
            &lt;/TD&gt;
            &lt;TD&gt;
                &lt;A onmouseover="document.fruit.src='apple.gif'"&gt;
                    &lt;B&gt;&lt;U&gt;Apple&lt;/U&gt;&lt;/B&gt;
                &lt;/A&gt;
                &lt;BR/&gt;
                &lt;A onmouseover="document.fruit.src='mango.gif'"&gt;
                    &lt;B&gt;&lt;U&gt;Mango&lt;/U&gt;&lt;/B&gt;
                &lt;/A&gt;
                &lt;BR/&gt;
                &lt;A onmouseover="document.fruit.src='grapes.gif'"&gt;
                    &lt;B&gt;&lt;U&gt;Grapes&lt;/U&gt;&lt;/B&gt;
                &lt;/A&gt;
                &lt;BR/&gt;
            &lt;/TD&gt;
        &lt;/TR&gt;
    &lt;/TABLE&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="text-rollover-show-image.jpg"></code></pre>
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