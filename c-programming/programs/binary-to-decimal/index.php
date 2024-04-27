<?php 
require("../../../libs/config.php");
$title = "C Program to Convert Binary Number to Decimal";
$description = "In this program, you'll learn to convert Binary number to Decimal number system.

Decimal to binary in C: We can convert any decimal number (base-10 (0 to 9)) into binary number(base-2 (0 or 1)) by c program.

Decimal number is a base 10 number, there are total 10 digits between 0 to 9. Any combination of digits is decimal number such as 23, 445, 132, 0, 2 etc.

Binary number is a base 2 number contains only 2 digits either 0 or 1. Any combination of 0 and 1 is binary number such as 1001, 101, 11111, 101010 etc.";
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
          <div class="bread-title"><h2>C Program to Convert Binary Number to Decimal</h2></div>
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
				<h2 class="blog-title">C Program to Convert Binary Number to Decimal</h2>
				<p>In this program, you'll learn to convert Binary number to Decimal number system.

Decimal to binary in C: We can convert any decimal number (base-10 (0 to 9)) into binary number(base-2 (0 or 1)) by c program.

Decimal number is a base 10 number, there are total 10 digits between 0 to 9. Any combination of digits is decimal number such as 23, 445, 132, 0, 2 etc.

Binary number is a base 2 number contains only 2 digits either 0 or 1. Any combination of 0 and 1 is binary number such as 1001, 101, 11111, 101010 etc.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include &lt;stdio.h&gt;
#include&lt;math.h&gt;

int main()
{
    int dec = 0, i, rem, c = 0;
    long bin;
    printf("Enter the Binary number: ");
    scanf("%ld", &bin);

    while(bin &gt; 0)
    {
        rem = bin % 10;
        dec = dec + rem * pow(2, c);
        bin = bin / 10; 
        c++;
    }
    printf("Decimal Equivalent is: %d", dec);
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the Binary number: 101011
Decimal Equivalent is: 43

Enter the Binary number: 101
Decimal Equivalent is: 5</code></pre>
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