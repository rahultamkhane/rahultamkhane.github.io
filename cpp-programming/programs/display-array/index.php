<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display Array Elements";
$description = "In this program, you'll learn to display array elements.<br><br>An array is a collection of homogeneous (same type) data items stored in contiguous memory locations. For example if an array is of type “int”, it can only store integer elements and cannot allow the elements of other types such as double, float, char etc.<br><br>An element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. For example −<br><br>int max = arr[2];
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
          <div class="bread-title"><h2>C++ Program to Display Array Elements</h2></div>
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
				<h2 class="blog-title">C++ Program to Display Array Elements</h2>
				<p>In this program, you'll learn to display array elements.<br><br>An array is a collection of homogeneous (same type) data items stored in contiguous memory locations. For example if an array is of type “int”, it can only store integer elements and cannot allow the elements of other types such as double, float, char etc.<br><br>An element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. For example −<br><br>int max = arr[2];
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
    int a[5];
    int i=0;

    cout&lt;&lt;"Enter 5 numbers: ";

    for(i=0; i&lt;5; i++)
    {
        cin&gt;&gt; a[i];
    }

    cout&lt;&lt;"\nArray elements are..\n";
    for(i=0; i&lt;5; i++)
    {
        cout&lt;&lt; "\n a[" &lt;&lt; i &lt;&lt; "] = " &lt;&lt; a[i];
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 5 numbers:
47
51
68
91
105

Array elements are..

 a[0] = 47
 a[1] = 51
 a[2] = 68
 a[3] = 91
 a[4] = 105
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