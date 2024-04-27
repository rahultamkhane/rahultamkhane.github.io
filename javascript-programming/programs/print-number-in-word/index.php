<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to print word equivalent of a given number";
$description = "Write a JavaScript program using switch statement to print word equivalent of a number from 0 to 9.

For example, if user enters <mark>3</mark> then the output shown will be '<mark>three</mark>'.";
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
          <div class="bread-title"><h2>JavaScript Program to print word equivalent of a given number</h2></div>
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
				<h2 class="blog-title">JavaScript Program to print word equivalent of a given number</h2>
				<p>Write a JavaScript program using switch statement to print word equivalent of a number from 0 to 9.

For example, if user enters <mark>3</mark> then the output shown will be "<mark>three</mark>".</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Print number in word&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    var n = prompt("Enter any number from 0 to 9", "Enter number here");
    n = parseInt(n);

    switch(n)
    {
        case 0: document.write("ZERO"); break;
        case 1: document.write("ONE"); break;
        case 2: document.write("TWO"); break;
        case 3: document.write("THREE"); break;
        case 4: document.write("FOUR"); break;
        case 5: document.write("FIVE"); break;
        case 6: document.write("SIX"); break;
        case 7: document.write("SEVEN"); break;
        case 8: document.write("EIGHT"); break;
        case 9: document.write("NINE"); break;
        default: document.write("Plz enter no. from 0 to 9"); break;
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="print-number-in-word.jpg"></code></pre>
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