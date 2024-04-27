<?php 
require("../../../libs/config.php");
$title = "C++ Program to Find Perimeter and Area  of Rectangle";
$description = "In this program, the user is ask for length and breadth of rectangle, then the permitere and area is calculated. Finally the result will be displayed on console.<br><br><br><br>Formulas:<br><br>Area of Rectangle = l x b<br><br>Perimeter of Rectangle = 2 * ( l + b )
";
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
              <li><a href="<?php echo SITE_DIR;?>cpp-programming/">C++ Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>cpp-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>C++ Program to Find Perimeter and Area  of Rectangle</h2></div>
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
				<h2 class="blog-title">C++ Program to Find Perimeter and Area  of Rectangle</h2>
				<p>In this program, the user is ask for length and breadth of rectangle, then the permitere and area is calculated. Finally the result will be displayed on console.<br><br>Formulas:<br><br>Area of Rectangle = l x b<br>Perimeter of Rectangle = 2 * ( l + b )
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include&lt;iostream&gt;
using namespace std;

int main()
{
    int len, bread, area, peri;
    cout&lt;&lt;"Please enter Length and Breadth: ";
    cin&gt;&gt;len&gt;&gt;bread;
    area = len * bread;
    peri = 2 * (len + bread);
    cout&lt;&lt;"Area = " &lt;&lt; area;
    cout&lt;&lt;"\nPerimeter = " &lt;&lt; peri;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Please enter Length and Breadth: 5 7
Area = 35
Perimeter = 24
</code></pre>
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
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>