<?php 
require("../../../libs/config.php");
$title = "C++ Program to Print Sum of Distances Using Structure";
$description = "In this program, you'll learn to declare structure 'distance' having member variables are km and m. Accept the two distances and you will get the total distance.
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
          <div class="bread-title"><h2>C++ Program to Print Sum of Distances Using Structure</h2></div>
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
				<h2 class="blog-title">C++ Program to Print Sum of Distances Using Structure</h2>
				<p>In this program, you'll learn to declare structure 'distance' having member variables are km and m. Accept the two distances and you will get the total distance.
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

struct distance
{
    int km, m;
};

int main()
{
    struct distance d1, d2, d3;

    cout&lt;&lt;"Enter first distance KM and M: ";
    cin&gt;&gt; d1.km &gt;&gt; d1.m;

    cout&lt;&lt;"Enter second distance KM and M: ";
    cin&gt;&gt; d2.km &gt;&gt; d2.m;

    d3.m = d1.m + d2.m;
    d3.km = d1.km + d2.km;

    if(d3.m &gt;= 1000)
    {
        d3.m = d3.m - 1000;
        d3.km++;
    }
    cout&lt;&lt;"\nTotal distance is: " &lt;&lt; d3.km &lt;&lt; " KM and " &lt;&lt; d3.m &lt;&lt; " meters" ;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter first distance KM and M: 5 750
Enter second distance KM and M: 12 500

Total distance is: 18 KM and 250 meters
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