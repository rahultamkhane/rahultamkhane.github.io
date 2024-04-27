<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Scroll Webpage Using scrollTo() method";
$description = "Write a JavaScript program to scroll webpage using <mark>'scrollto()'</mark> method.";
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
          <div class="bread-title"><h2>JavaScript Program to Scroll Webpage Using scrollTo() method</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Scroll Webpage Using scrollTo() method</h2>
				<p>Write a JavaScript program to scroll webpage using <mark>"scrollto()"</mark> method.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;scrollTo() method&lt;/title&gt;
    &lt;script&gt;
        function init()
        {
            scrollTo(80, 150)
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body onload="init()"&gt;
&lt;h1&gt;Javascript | Window scrollTo() Method&lt;/h1&gt;
&lt;p&gt;The Window scrollTo() method is used to scroll to a particular set of coordinates in the document.

Syntax:

window.scrollTo(x-coord, y-coord)
Parameters: The scrollTo() method accepts two parameters as described below:

x-coord: It is the pixel along the horizontal axis of the document that is displayed in the upper left. It is the required field.
y-coord: It is the pixel along the vertical axis of the document that is displayed in the upper left. It is the required field.
&lt;/p&gt;
&lt;pre&gt;
Example:

&lt;html&gt; 

&lt;head&gt; 
&lt;title&gt;Window scrollTo() Method&lt;/title&gt; 
&lt;style&gt; 
body { 
width: 5000px; 
height: 5000px; 
margin-left: 260px; 
} 
&lt;/style&gt; 
&lt;/head&gt; 

&lt;body&gt; 
&lt;h1 style="color:green;"&gt; 
GeeksforGeeks 
&lt;/h1&gt; 
&lt;h2&gt; 
Window scrollTo() Method 
&lt;/h2&gt; 

&lt;p&gt; 
A computer science portal for geeks. 
&lt;/p&gt; 

&lt;button onclick="geek()"&gt;Click to scroll!&lt;/button&gt; 

&lt;script&gt; 
function geek() { 
//Scrolling the document to position "250"  
//horizontally and "110" vertically 
window.scrollTo(250, 110); 
} 
&lt;/script&gt; 
&lt;/body&gt; 

&lt;/html&gt; 
&lt;/pre&gt;
&lt;pre&gt;
Output:
Before clicking the button:
scrollTo
After clicking the button:
scrollTo
Supported Browsers: The browser supported by Window scrollTo() Method are listed below:
&lt;/pre&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="window-scroll.jpg"></code></pre>
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