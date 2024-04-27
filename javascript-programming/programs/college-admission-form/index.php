<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Generate College Admission Form Using HTML FORM Tag";
$description = "Write a JavaScript program to generate college admission form using HTMLl <mark>FORM</mark> tag.";
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
          <div class="bread-title"><h2>JavaScript Program to Generate College Admission Form Using HTML FORM Tag</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Generate College Admission Form Using HTML FORM Tag</h2>
				<p>Write a JavaScript program to generate college admission form using HTMLl <mark>FORM</mark> tag.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;College Admission Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
&lt;h1&gt;Admission Form&lt;/h1&gt;
&lt;form&gt;
    &lt;table&gt;
        &lt;tr&gt;
        &lt;td&gt;Full Name:&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="lname"/&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Date of Birtd:&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="dob"/&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Gender:&lt;/td&gt;
        &lt;td&gt;&lt;input type="radio" name="gender" value="Male"&gt;Male&lt;/input&gt;&nbsp;&nbsp;&nbsp;&nbsp;
        &lt;input type="radio" name="gender" value="Female"&gt;Female&lt;/input&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Category:&lt;/td&gt;
        &lt;td&gt;
            &lt;select name="category"&gt;
                &lt;option selected&gt;Open&lt;/option&gt;
                &lt;option&gt;OBC&lt;/option&gt;
                &lt;option&gt;SC&lt;/option&gt;
                &lt;option&gt;ST&lt;/option&gt;
                &lt;option&gt;VJ/NT&lt;/option&gt;
            &lt;/select&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Email:&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="email" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Contact no.:&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="phone" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Address :&lt;/td&gt;
        &lt;td&gt;&lt;textarea rows="2" cols="20"&gt;&lt;/textarea&gt;
    &lt;/tr&gt;
    &lt;/table&gt;
&lt;/form&gt;
&lt;input type="submit" value="Submit" /&gt;&nbsp;&nbsp;&nbsp;&nbsp;
&lt;input type="reset" value="Cancel" /&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="college-admission-form.jpg"></code></pre>
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