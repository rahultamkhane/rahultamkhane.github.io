<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Change Background Color Using Checkbox Selection";
$description = "Write a JavaScript program to change background color using checkbox selection.";
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
          <div class="bread-title"><h2>JavaScript Program to Change Background Color Using Checkbox Selection</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Change Background Color Using Checkbox Selection</h2>
				<p>Write a JavaScript program to change background color using checkbox selection.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Change background color using Checkbox selection&lt;/title&gt;
    &lt;script&gt;
    function changeColor() 
    {
        var panel = document.getElementById('panel')
        var text = "You selected colors: "
        var r=0, g=0, b=0;

        with(document.forms.myForm)
        {
            if(red.checked == true)
            {
                r = 255;
                text += "Red";
            }
            if(green.checked == true)
            {
                g = 255;
                text += ", Green";
            }
            if(blue.checked == true)
            {
                b = 255;
                text += ", Blue";
            }
        }
        panel.innerHTML = text;
        document.body.style.backgroundColor = getRGB(r, g, b)
    }
    function getRGB(r, g, b)
    {
        var colorHash = "#"+ ((r==255) ? "FF" : "00") + ((g==255) ? "FF" : "00") + ((b==255) ? "FF" : "00")
        return colorHash;
    }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form name="myForm"&gt;
    &lt;input type="checkbox" name="red" value="Red" onchange="changeColor()"/&gt;Red&lt;br/&gt;
    &lt;input type="checkbox" name="green" value="Green" onchange="changeColor()"/&gt;Green&lt;br/&gt;
    &lt;input type="checkbox" name="blue" value="Blue" onchange="changeColor()"/&gt;Blue&lt;br/&gt;
    &lt;p id="panel"&gt;You selected colors: &lt;/p&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="checkbox-bgcolor-change.jpg"></code></pre>
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