<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Move Newly Created Window Using Navigation Buttons";
$description = "Write a JavaScript program to move newly created window using navigation buttons.";
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
          <div class="bread-title"><h2>JavaScript Program to Move Newly Created Window Using Navigation Buttons</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Move Newly Created Window Using Navigation Buttons</h2>
				<p>Write a JavaScript program to move newly created window using navigation buttons.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Move window (left, right, up, down) using JavaScript&lt;/title&gt;
    &lt;script&gt;
        var win
        var x=20, y=20
        function init()
        {
            win = window.open("", "MyWindow", "width=100, height=100")
        }
        function moveLeft() 
        {
            x -= 20
            win.moveTo(x, y)
        }
        function moveRight() 
        {
            x += 20
            win.moveTo(x, y)
        }
        function moveUp() 
        {
            y -= 20
            win.moveTo(x, y)
        }
        function moveDown() 
        {
            y += 20
            win.moveTo(x, y)
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body onload="init()"&gt;
&lt;form action=""&gt;
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="button" value="Top" onclick="moveUp()"/&gt; &lt;br/&gt;
    &lt;input type="button" value="Left" onclick="moveLeft()"/&gt; 
    &lt;input type="button" value="Right" onclick="moveRight()"/&gt; &lt;br/&gt;
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="button" value="Bottoom" onclick="moveDown()"/&gt; 
&lt;/form&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="move-window.jpg"></code></pre>
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