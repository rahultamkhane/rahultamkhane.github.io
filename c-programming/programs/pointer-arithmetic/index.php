<?php 
require("../../../libs/config.php");
$title = "C Program to Perform Arithmetic Operations Using Pointers";
$description = "In this program, you'll learn to perform Arithmetic Operations using Pointers. 

The pointer is a variable which stores the address of another variable. This variable can be of type int, char, array, function, or any other pointer. The size of the pointer depends on the architecture. However, in 32-bit architecture the size of a pointer is 2 byte.

Unlike other variables that hold values of a certain type, pointer holds the address of a variable. For example, an integer variable holds (or stores) an integer value, however an integer pointer holds the address of a integer variable.

Adding or subtracting from a pointer moves it by a multiple of the size of the data type it points to. For example, assume we have a pointer to an array of 4-byte integers. Incrementing this pointer will increment its value by 4 (the size of the element).";
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
          <div class="bread-title"><h2>C Program to Perform Arithmetic Operations Using Pointers</h2></div>
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
				<h2 class="blog-title">C Program to Perform Arithmetic Operations Using Pointers</h2>
				<p>In this program, you'll learn to perform Arithmetic Operations using Pointers. 

The pointer is a variable which stores the address of another variable. This variable can be of type int, char, array, function, or any other pointer. The size of the pointer depends on the architecture. However, in 32-bit architecture the size of a pointer is 2 byte.

Unlike other variables that hold values of a certain type, pointer holds the address of a variable. For example, an integer variable holds (or stores) an integer value, however an integer pointer holds the address of a integer variable.

Adding or subtracting from a pointer moves it by a multiple of the size of the data type it points to. For example, assume we have a pointer to an array of 4-byte integers. Incrementing this pointer will increment its value by 4 (the size of the element).</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
void main()
{
    int no1, no2, *ptr1, *ptr2, result;
    clrscr();
    printf("Enter no1: ");
    scanf("%d", &no1);
    printf("Enter no2: ");
    scanf("%d", &no2);
    ptr1 = &no1;
    ptr2 = &no2;
    result = *ptr1 + *ptr2;
    printf("\n Addition=%d", result);
    result = *ptr1 - *ptr2;
    printf("\n Subtraction=%d", result);
    result = *ptr1 * *ptr2;
    printf("\n Multiplication=%d", result);
    result = *ptr1 / *ptr2;
    printf("\n Division=%d",result);
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter no1: 45
Enter no2: 2

 Addition=47
 Subtraction=43
 Multiplication=90
 Division=22</code></pre>
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