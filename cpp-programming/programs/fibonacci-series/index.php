<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display Fibonacci Series";
$description = "In this program, you will learn how to display Fibonacci Series upto the user provided terms.<br><br>The Fibonacci Sequence is the series of numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34. Here the next number is the sum of previous two numbers.
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
          <div class="bread-title"><h2>C++ Program to Display Fibonacci Series</h2></div>
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
				<h2 class="blog-title">C++ Program to Display Fibonacci Series</h2>
				<p>In this program, you will learn how to display Fibonacci Series upto the user provided terms.<br><br>The Fibonacci Sequence is the series of numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34. Here the next number is the sum of previous two numbers.
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
    int i, term;
    int first=0, second=1, next;

    cout&lt;&lt;"How many terms: ";
    cin&gt;&gt; term;
    cout&lt;&lt;"\nFibonacci series:\n";
    cout&lt;&lt; first &lt;&lt; " " &lt;&lt; second;
    for(i=2; i&lt;term; i++)
    {
        next = first + second;
        cout&lt;&lt; next &lt;&lt; ", ";
        first = second;
        second = next;
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">How many terms: 11

Fibonacci series:
0 11, 2, 3, 5, 8, 13, 21, 34, 55,
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