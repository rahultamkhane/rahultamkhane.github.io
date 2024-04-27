<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Change Options in List Dynamically";
$description = "Write a JavaScript program to change options in list dynamically.";
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
          <div class="bread-title"><h2>JavaScript Program to Change Options in List Dynamically</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Change Options in List Dynamically</h2>
				<p>Write a JavaScript program to change options in list dynamically.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Change option in list dynamically&lt;/title&gt;
    &lt;script&gt;
        function resetOptionList(elem)
        {
            with(document.forms.contact)
            {
                if(elem == 1)
                {
                    optionList[0].text = "Classic"
                    optionList[0].value = "1"
                    optionList[1].text = "Police Cruiser"
                    optionList[1].value = "2"
                }
                if(elem == 2)
                {
                    optionList[0].text = "Ford"
                    optionList[0].value = "1"
                    optionList[1].text = "Chevy"
                    optionList[1].value = "2"
                }
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form name="contact"&gt;
    &lt;p&gt;
    &lt;select name="optionList" size="5"&gt;
        &lt;option value=1&gt;Classic
        &lt;option value=2&gt;Police Cruiser
    &lt;/select&gt;&lt;br/&gt;
    &lt;input type="radio" name="vehicles" checked="true" value="1" onclick="resetOptionList(this.value)"&gt;Motorcycles
    &lt;input type="radio" name="vehicles" value="2" onclick="resetOptionList(this.value)"&gt;Cars
    &lt;/p&gt;
    &lt;input type="submit" value="Submit"/&gt;&lt;br/&gt;
    &lt;input type="reset" value="Reset"/&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="change-option-dynamically.jpg"></code></pre>
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