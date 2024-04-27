<?php 
require("../../../libs/config.php");
$title = "JavaScript program to delete a property of an object";
$description = "Write JavaScript program to create <mark>'person'</mark> object with properties <mark>firstname</mark>, <mark>lastname</mark>, <mark>age</mark>, <mark>eye color</mark>, delete eye color property and display remaining properties of person object.";
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
          <div class="bread-title"><h2>JavaScript program to delete a property of an object</h2></div>
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
				<h2 class="blog-title">JavaScript program to delete a property of an object</h2>
				<p>Write JavaScript program to create <mark>"person"</mark> object with properties <mark>firstname</mark>, <mark>lastname</mark>, <mark>age</mark>, <mark>eye color</mark>, delete eye color property and display remaining properties of person object.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;delete operator Demo&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script type="text/javascript"&gt;
    var person = {firstName: "John", lastName: "Smith", age: 30, eyeColor: "Black"};
    document.write("First name: " + person.firstName+"&lt;br&gt;");
    document.write("Last name: " + person.lastName+"&lt;br&gt;");
    document.write("Age: " + person.age+"&lt;br&gt;");
    document.write("Eye Color: " + person.eyeColor+"&lt;br&gt;");

    delete person.eyeColor;		// deleting age property from person
    if("eyeColor" in person)
        document.write("Eye Color property is available");
    else
        document.write("Eye Color property is not available");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="object-delete-property.jpg"></code></pre>
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