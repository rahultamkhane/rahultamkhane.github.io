<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Demonstrate Mouse Events";
$description = "Write a JavaScript program to demonstrate mouse events.";
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
          <div class="bread-title"><h2>JavaScript Program to Demonstrate Mouse Events</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Demonstrate Mouse Events</h2>
				<p>Write a JavaScript program to demonstrate mouse events.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Mouse Events&lt;/title&gt;
    &lt;script&gt;
    function init()
    {
        var panel = document.getElementById('panel')
        var btn = document.getElementById('btn')

        btn.addEventListener("dblclick", dblClick)
        btn.addEventListener("mousedown", mouseDown)
        btn.addEventListener("mouseup", mouseUp)
        btn.addEventListener("mouseover", mouseOver)
        btn.addEventListener("mouseout", mouseOut)
        btn.addEventListener("mousemove", mouseMove)
    }

    function click()
    {
        panel.innerHTML += "Mouse clicked&lt;br/&gt;"
    }

    function dblClick()
    {
        panel.innerHTML += "Mouse double clicked&lt;br/&gt;"
    }
    function mouseDown()
    {
        panel.innerHTML += "Mouse down&lt;br/&gt;"
    }
    function mouseUp()
    {
        panel.innerHTML += "Mouse up&lt;br/&gt;"
    }
    function mouseOver()
    {
        panel.innerHTML += "Mouse over&lt;br/&gt;"
    }
    function mouseOut()
    {
        panel.innerHTML += "Mouse out&lt;br/&gt;"
    }
    function mouseMove()
    {
        panel.innerHTML += "Mouse moved&lt;br/&gt;"
    }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body onload="init()"&gt;
&lt;input type="button" id="btn" value="Mouse Events" onclick="click()"/&gt;
&lt;h3&gt;Mouse events performed are&lt;/h3&gt;
&lt;p id="panel"&gt;&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="mouse-events-2.jpg"></code></pre>
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