<?php 
require("../../../libs/config.php");
$title = "JavaScript Program Display Checkbox Selection Using 'with' statement";
$description = "Write a JavaScript program display checkbox selection using <mark>'with'</mark> statement.";
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
          <div class="bread-title"><h2>JavaScript Program Display Checkbox Selection Using 'with' statement</h2></div>
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
				<h2 class="blog-title">JavaScript Program Display Checkbox Selection Using 'with' statement</h2>
				<p>Write a JavaScript program display checkbox selection using <mark>'with'</mark> statement.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Checkbox display selected hobbies&lt;/title&gt;
    &lt;script&gt;
        function setOptions()
        {
            var panel = document.getElementById('panel')
            with(document.forms.myform)
            {
                var selection="You selected sports: ";
                if(Cricket.checked == true)
                {
                    selection += "Cricket";
                }
                if(Volleyball.checked == true)
                {
                    selection += ", Volleyball";
                }
                if(Tennis.checked == true)
                {
                    selection += ", Tennis";
                }
                if(Badminton.checked == true)
                {
                    selection += ", Badminton";
                }
                panel.innerHTML = selection
            }	
        }	
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;form name="myform"&gt;
    &lt;input type="checkbox" name="Cricket" onchange="setOptions()"&gt;Cricket&lt;br/&gt;
    &lt;input type="checkbox" name="Volleyball" onchange="setOptions()"&gt;Volleyball&lt;br/&gt;
    &lt;input type="checkbox" name="Tennis" onchange="setOptions()"&gt;Tennis&lt;br/&gt;
    &lt;input type="checkbox" name="Badminton" onchange="setOptions()"&gt;Badminton&lt;br/&gt;
&lt;/form&gt;

&lt;p id="panel"&gt;You selected sports: &lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="checkbox-hobby-selection.jpg"></code></pre>
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