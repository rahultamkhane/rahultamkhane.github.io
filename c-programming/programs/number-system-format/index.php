<?php 
require("../../../libs/config.php");
$title = "C Program to Display Given Number in Decimal, Octal and Hexadecimal Format";
$description = "In this program, the user is ask to enter the number, then the number equivalent is displayed on Decimal, Octal and Hexadecimal format is displayed on console.

The decimal number system uses only ten digits (0 through 9) there are no numbers or letters used above 10.

The octal number system uses only eight digits (0 through 7) there are no numbers or letters used above 8.

The hexadecimal number system uses only ten digits (0 through 9) and six letters (A through F) .
Here,
A means 10
B means 11
C means 12
D means 13
E means 14
F means 15";
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
          <div class="bread-title"><h2>C Program to Display Given Number in Decimal, Octal and Hexadecimal Format</h2></div>
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
				<h2 class="blog-title">C Program to Display Given Number in Decimal, Octal and Hexadecimal Format</h2>
				<p>In this program, the user is ask to enter the number, then the number equivalent is displayed on Decimal, Octal and Hexadecimal format is displayed on console.

The decimal number system uses only ten digits (0 through 9) there are no numbers or letters used above 10.

The octal number system uses only eight digits (0 through 7) there are no numbers or letters used above 8.

The hexadecimal number system uses only ten digits (0 through 9) and six letters (A through F) .
Here,
A means 10
B means 11
C means 12
D means 13
E means 14
F means 15</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include &lt;conio.h&gt;

void main ()
{
    int a;
    clrscr();
    printf("Enter a number :");
    scanf ("%d",&a);
    printf("Decimal : %d\n",a);
    printf("Octal : %o\n",a);
    printf("Hexadecimal : %x\n",a);
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter a number :142
Decimal : 142
Octal : 216
Hexadecimal : 8e</code></pre>
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