<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Scroll text in status bar";
$description = "Write a JavaScript program to scroll text in status bar.";
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
          <div class="bread-title"><h2>JavaScript Program to Scroll text in status bar</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Scroll text in status bar</h2>
				<p>Write a JavaScript program to scroll text in status bar.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Scroll text in status bar&lt;/title&gt;
&lt;/head&gt;
&lt;body onload="scrollIn()"&gt;
    &lt;script&gt;
        winObj = window.open("", "mywin", "toolbar=0, status=1, innerHeight=100, innerWidth=100");
        var msg = "This is a status bar";
        var place = 1;

        function scrollIn()
        {
            winObj.status = msg.substring(0, place);
            if(place &gt;= msg.length)
            {
                place = 1;
                window.setTimeout("scrollOut()", 300);
            }
            else
            {
                place++;
                window.setTimeout("scrollIn()", 50);
            }
        }
        function scrollOut()
        {
            winObj.status = msg.substring(place, msg.length);
            if(place &gt;= msg.length)
            {
                place = 1;
                window.setTimeout("scrollIn()", 100);
            }
            else
            {
                place++;
                window.setTimeout("scrollOut()", 50);
            }
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
					<pre><code class="plaintext"><img src="scroll-text-in-statusbar.jpg"></code></pre>
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