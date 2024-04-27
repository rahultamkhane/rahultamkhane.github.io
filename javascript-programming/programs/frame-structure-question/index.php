<?php 
require("../../../libs/config.php");
$title = "JavaScript Program for Creating a Frame Structure Given in Output.";
$description = "Write a JavaScript program for creating a frame structure given in output.<br>
Write a script for creating following frame structure. Fruits, flowers and cities are links to the webpage fruits.html, flowers.html, cities.html respectively. when these links are clicked corresponding data appears in frame 3.";
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
          <div class="bread-title"><h2>JavaScript Program for Creating a Frame Structure Given in Output.</h2></div>
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
				<h2 class="blog-title">JavaScript Program for Creating a Frame Structure Given in Output.</h2>
				<p>Write a JavaScript program for creating a frame structure given in output.<br>
Write a script for creating following frame structure. Fruits, flowers and cities are links to the webpage fruits.html, flowers.html, cities.html respectively. when these links are clicked corresponding data appears in frame 3.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Creating frame structure&lt;/title&gt;
&lt;/head&gt;
&lt;frameset rows="20%, *"&gt;
    &lt;frame src="f1.html" name="frame1"/&gt;
    &lt;frameset cols="*, *"&gt;
        &lt;frame src="f2.html" name="frame2"/&gt;
        &lt;frame src="f3.html" name="frame3"/&gt;
    &lt;frameset/&gt;
&lt;/frameset&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Frame 1&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
    &lt;h1&gt;FRAME 1&lt;/h1&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Left Side Frame&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;FRAME 2&lt;/h1&gt;
&lt;ul&gt;
    &lt;li&gt;&lt;a href="fruits.html" target="frame3"&gt;FRUITS&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="flowers.html" target="frame3"&gt;FLOWERS&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="cities.html" target="frame3"&gt;CITIES&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;FRUITS&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Fruits&lt;/h2&gt;
&lt;ul type="oval"&gt;
    &lt;li&gt;Orange&lt;/li&gt;
    &lt;li&gt;Kiwi&lt;/li&gt;
    &lt;li&gt;Apple&lt;/li&gt;
    &lt;li&gt;Pineapple&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;FLOWERS&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Flowers&lt;/h2&gt;
&lt;ul&gt;
    &lt;li&gt;Rose&lt;/li&gt;
    &lt;li&gt;Tulip&lt;/li&gt;
    &lt;li&gt;Lily&lt;/li&gt;
    &lt;li&gt;Orchids&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;CITIES&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Cities&lt;/h2&gt;
&lt;ul&gt;
    &lt;li&gt;New Delhi&lt;/li&gt;
    &lt;li&gt;Mumbai&lt;/li&gt;
    &lt;li&gt;Banglore&lt;/li&gt;
    &lt;li&gt;Pune&lt;/li&gt;
&lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;


&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Frame 3&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;FRAME 3&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="frame-structure-question.jpg"></code></pre>
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