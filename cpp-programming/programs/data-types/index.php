<?php 
require("../../../libs/config.php");
$title = "C++ Program to Size of all C Language Data Types";
$description = "In this program, you will learn how to display the data type sizes using sizeof() operator. Data types specify how we enter data into our programs and what type of data we enter.<br><br><mark>sizeof</mark> is a compile time unary operator which can be used to compute the size of its operand.
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
          <div class="bread-title"><h2>C++ Program to Size of all C Language Data Types</h2></div>
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
				<h2 class="blog-title">C++ Program to Size of all C Language Data Types</h2>
				<p>In this program, you will learn how to display the data type sizes using sizeof() operator. Data types specify how we enter data into our programs and what type of data we enter.<br><br><mark>sizeof</mark> is a compile time unary operator which can be used to compute the size of its operand.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
  short s;
  int i;
  char c;
  float f;
  double d;
  long l;
  long double ld;

  cout&lt;&lt;"Size of short (in bytes) = " &lt;&lt; sizeof(s) &lt;&lt; endl;
  cout&lt;&lt;"Size of int = " &lt;&lt; sizeof(i) &lt;&lt; endl;
  cout&lt;&lt;"Size of char = " &lt;&lt; sizeof(c) &lt;&lt; endl;
  cout&lt;&lt;"Size of float = " &lt;&lt; sizeof(f) &lt;&lt; endl;
  cout&lt;&lt;"Size of double = " &lt;&lt; sizeof(d) &lt;&lt; endl;
  cout&lt;&lt;"Size of long = " &lt;&lt; sizeof(l) &lt;&lt; endl;
  cout&lt;&lt;"Size of long double= " &lt;&lt; sizeof(ld);
  return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Size of short (in bytes) = 2
Size of int = 4
Size of char = 1
Size of float = 4
Size of double = 8
Size of long = 4
Size of long double= 16
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