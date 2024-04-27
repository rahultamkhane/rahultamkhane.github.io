<?php 
require("../../../libs/config.php");
$title = "C Program to Size of all C Language Data Types";
$description = "In this program, you will learn how to display the data type sizes using sizeof() operator.
Data types specify how we enter data into our programs and what type of data we enter. 

Sizeof is a compile time unary operator which can be used to compute the size of its operand. ";
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
              <li><a href="<?php echo SITE_DIR;?>c-programming/">C Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>c-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>C Program to Size of all C Language Data Types</h2></div>
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
				<h2 class="blog-title">C Program to Size of all C Language Data Types</h2>
				<p>In this program, you will learn how to display the data type sizes using sizeof() operator.
Data types specify how we enter data into our programs and what type of data we enter. 

Sizeof is a compile time unary operator which can be used to compute the size of its operand. </p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include &lt;stdio.h&gt;
int main() {
  short s;
  int i;
  char c;
  float f;
  double d;
  long l;
  long double ld;

  printf("Size of short = %d bytes\n", sizeof(s));
  printf("Size of int = %d bytes\n", sizeof(i));
  printf("Size of char = %d byte\n", sizeof(c));
  printf("Size of float = %d bytes\n", sizeof(f));
  printf("Size of double = %d bytes\n", sizeof(d));
  printf("Size of long = %d bytes\n", sizeof(l));
  printf("Size of long double= %d bytes\n", sizeof(ld));
  return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Size of short = 2 bytes
Size of int = 4 bytes
Size of char = 4 bytes
Size of float = 4 bytes
Size of double = 8 bytes
Size of long = 4 bytes
Size of long double= 12 bytes</code></pre>
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