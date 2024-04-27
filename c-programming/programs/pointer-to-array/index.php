<?php 
require("../../../libs/config.php");
$title = "C Program to Display Array Elements Using Pointer to Array";
$description = "In this program, you'll learn to display array elements using pointer to array. 

The pointer is a variable which stores the address of another variable. This variable can be of type int, char, array, function, or any other pointer. The size of the pointer depends on the architecture. However, in 32-bit architecture the size of a pointer is 2 byte.

Unlike other variables that hold values of a certain type, pointer holds the address of a variable. For example, an integer variable holds (or stores) an integer value, however an integer pointer holds the address of a integer variable.

Pointer to an array is also known as <mark>array pointer</mark>. We are using the pointer to access the components of the array. 

int a[3] = {3, 4, 5 }; 
int *ptr = a; 

We have a pointer ptr that focuses to the 0th component of the array.";
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
          <div class="bread-title"><h2>C Program to Display Array Elements Using Pointer to Array</h2></div>
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
				<h2 class="blog-title">C Program to Display Array Elements Using Pointer to Array</h2>
				<p>In this program, you'll learn to display array elements using pointer to array. 

The pointer is a variable which stores the address of another variable. This variable can be of type int, char, array, function, or any other pointer. The size of the pointer depends on the architecture. However, in 32-bit architecture the size of a pointer is 2 byte.

Unlike other variables that hold values of a certain type, pointer holds the address of a variable. For example, an integer variable holds (or stores) an integer value, however an integer pointer holds the address of a integer variable.

Pointer to an array is also known as <mark>array pointer</mark>. We are using the pointer to access the components of the array. 

int a[3] = {3, 4, 5 }; 
int *ptr = a; 

We have a pointer ptr that focuses to the 0th component of the array.</p>
				
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
    int *ptr[5], i;
    int arr[] = {11,22,33,44,55};
    clrscr();
    for(i=0; i&lt;5; i++)
    {
        ptr[i] = &arr[i];
    }
    /* Display elements using pointer to array */
    printf("Elements of array are :\n");
    for(i=0; i&lt;5; i++)
        printf("%d ", *ptr[i]);
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Elements of array are :
11 22 33 44 55</code></pre>
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