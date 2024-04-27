<?php 
require("../../../libs/config.php");
$title = "C++ Program to Print Largest String Among Two Strings";
$description = "In this program, you'll learn how to print the largest string among two strings. First we find the length of both strings, then check which string length is greater, finally we will get the larger string.<br><br>The <mark>strlen()</mark> is the C library function  which is used to calculate the length of a given string.<br><br>The function definition of <mark>strlen()</mark> is: <br><br>size_t strlen(const char *str)
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
          <div class="bread-title"><h2>C++ Program to Print Largest String Among Two Strings</h2></div>
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
				<h2 class="blog-title">C++ Program to Print Largest String Among Two Strings</h2>
				<p>In this program, you'll learn how to print the largest string among two strings. First we find the length of both strings, then check which string length is greater, finally we will get the larger string.<br><br>The <mark>strlen()</mark> is the C library function  which is used to calculate the length of a given string.<br><br>The function definition of <mark>strlen()</mark> is: <br><br><code>size_t strlen(const char *str)</code>
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include&lt;iostream&gt;
#include&lt;string.h&gt;
using namespace std;

int main()
{
    char str1[20],str2[20];
    int len_a,len_b;
    cout&lt;&lt;"Enter first string: ";
    cin&gt;&gt; str1;
    cout&lt;&lt;"Enter second string: ";
    cin&gt;&gt; str2;
    len_a = strlen(str1);
    len_b = strlen(str2);
    if(len_a &gt; len_b)
    {
        cout&lt;&lt; str1;
    }
    else
    {
        cout&lt;&lt; str2;
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter first string: denis
Enter second string: balaguruswamy
The larger string is: balaguruswamy
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