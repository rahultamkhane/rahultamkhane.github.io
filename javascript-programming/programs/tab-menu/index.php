<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create a Tab Menu";
$description = "Write a JavaScript program to create a tab menu.";
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
          <div class="bread-title"><h2>JavaScript Program to Create a Tab Menu</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create a Tab Menu</h2>
				<p>Write a JavaScript program to create a tab menu.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Tab Menu&lt;/title&gt;
    &lt;style&gt;
        .tabs .tab {
            float: left;
        }
        .tabs .tab .content {
            position: absolute;
            left: 0px;
            width: 60%;
            border: 1px black solid;
        }
        .checkboxtab {
            display: none;
        }
        .tab label {
            margin-right: 10px;
        }
        .checkboxtab:checked ~ label {
            color: purple;
            border: 1px black solid;
        }
        .checkboxtab:checked ~ .content {
            z-index: 1;
        }
        span {
            background-color: white;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h2&gt;Tab Menu Example&lt;/h2&gt;

&lt;div class="tabs"&gt;

&lt;div class="tab"&gt;
&lt;input type="radio" name="checkbox-group" id="cb1" class="checkboxtab" checked&gt;
&lt;label for="cb1"&gt;Tab 1&lt;/label&gt;
&lt;div class="content"&gt;
&lt;span style="color:red;"&gt;This is the content of tab 1&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="tab"&gt;
&lt;input type="radio" name="checkbox-group" id="cb2" class="checkboxtab"&gt;
&lt;label for="cb2"&gt;Tab 2&lt;/label&gt;
&lt;div class="content"&gt;
&lt;span style="color:green;"&gt;This is the content of tab 2&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;div class="tab"&gt;
&lt;input type="radio" name="checkbox-group" id="cb3" class="checkboxtab"&gt;
&lt;label for="cb3"&gt;Tab 3&lt;/label&gt;
&lt;div class="content"&gt;
&lt;span style="color:blue;"&gt;This is the content of tab 3&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="tab-menu.jpg"></code></pre>
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