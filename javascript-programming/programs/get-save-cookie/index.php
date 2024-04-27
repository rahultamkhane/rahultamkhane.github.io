<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Save the Selected Color Value in Cookie and Retrive the value of it";
$description = "Write a JavaScript program to save the selected color value in cookie and retrive the value of it.";
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
          <div class="bread-title"><h2>JavaScript Program to Save the Selected Color Value in Cookie and Retrive the value of it</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Save the Selected Color Value in Cookie and Retrive the value of it</h2>
				<p>Write a JavaScript program to save the selected color value in cookie and retrive the value of it.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Sample Cookie&lt;/title&gt;
    &lt;/head&gt;
    &lt;script&gt;
        function saveCookie() {
            var c = document.forms.myform.color.value;
            document.cookie = "color=" + c + ";";
            alert("Cookie saved successfully !!!");
        }

        function getCookie() {
            alert(document.cookie);
        }
    &lt;/script&gt; 
    &lt;body&gt;
       
    &lt;p&gt;Select the color&lt;/p&gt;
    &lt;form name="myform"&gt;
        &lt;input type="radio" name="color" value="red"&gt;Red&lt;br&gt;
        &lt;input type="radio" name="color" value="green"&gt;Green&lt;br&gt;
        &lt;input type="radio" name="color" value="blue"&gt;Blue&lt;br&gt;
        &lt;input type="button" value="Save Cookie" onclick="saveCookie()"&gt; 
        &lt;input type="button" value="Get Cookie" onclick="getCookie()"&gt;&lt;br&gt;
    &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="get-save-cookie.jpg"></code></pre>
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