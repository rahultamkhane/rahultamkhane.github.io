<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Save Color in Cookie and Set Background Color of Webpage";
$description = "Write a JavaScript program to save color in cookie and set background color of webpage.";
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
          <div class="bread-title"><h2>JavaScript Program to Save Color in Cookie and Set Background Color of Webpage</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Save Color in Cookie and Set Background Color of Webpage</h2>
				<p>Write a JavaScript program to save color in cookie and set background color of webpage.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Save color in cookie and set background color&lt;/title&gt;
    &lt;script&gt;
        function getColor() 
        {
            var value = document.cookie;

            if(value == "")
                document.body.style.backgroundColor = "white";
            else
            {
                var color = value.split("=");
                document.body.style.backgroundColor = color[1];
            }
        }
        function setColor() 
        {
            var c;
            with(document.forms.myForm)
            {
                c = color.options[color.selectedIndex].value;
                document.cookie = "color=" + c + ";";
                alert("Cookie Updated");
                getColor();
            }
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body onload="getColor()"&gt;
&lt;form name="myForm"&gt;
    Select Color&lt;/br&gt;
    &lt;select name="color"&gt;
        &lt;option value="red"&gt;Red
        &lt;option value="green"&gt;Green
        &lt;option value="blue"&gt;Blue
        &lt;option value="cyan"&gt;Cyan
        &lt;option value="magenta"&gt;Magenta
    &lt;/select&gt;
    &lt;br/&gt;
    &lt;input type="button" value="Update Cookie" onclick="setColor()"/&gt;
&lt;/form&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="select-color-from-cookie.jpg"></code></pre>
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