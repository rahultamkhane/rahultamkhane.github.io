<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Change Text Color on Checkbox Selection";
$description = "Write a JavaScript program to change text color on checkbox selection.";
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
          <div class="bread-title"><h2>JavaScript Program to Change Text Color on Checkbox Selection</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Change Text Color on Checkbox Selection</h2>
				<p>Write a JavaScript program to change text color on checkbox selection.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Text color change RGB&lt;/title&gt;
    &lt;script&gt;
        function setOptions()
        {
            var panel = document.getElementById('panel')
            with(document.forms.myform)
            {
                var selection="You selected colors: ";
                var r=0, g=0, b=0;

                if(red.checked == true)
                {
                    selection += "Red";
                    r = 255;
                }
                if(green.checked == true)
                {
                    selection += ", Green";
                    g=255;
                }
                if(blue.checked == true)
                {
                    selection += ", Blue";
                    b=255;
                }
                panel.innerHTML = selection
                panel.style.color = rgb1(r, g, b)
            }	
        }	
        function rgb1(r, g, b)
        {
            var text = ((r==255) ? "FF" : "00") + ((g==255) ? "FF" : "00") + ((b==255) ? "FF" : "00")
            return "#"+text
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;form name="myform"&gt;
    &lt;input type="checkbox" name="red" onchange="setOptions()"&gt;Red&lt;br/&gt;
    &lt;input type="checkbox" name="green" onchange="setOptions()"&gt;Green&lt;br/&gt;
    &lt;input type="checkbox" name="blue" onchange="setOptions()"&gt;Blue&lt;br/&gt;
&lt;/form&gt;

&lt;p id="panel"&gt;You selected colors: &lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="text-color-change.jpg"></code></pre>
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