<?php 
require("../../../libs/config.php");
$title = "C Program to Demonstrate Pointers to Functions";
$description = "In this program, you will learn to use pointers to functions. 

Pointer as a function parameter is used to hold addresses of arguments passed during function call. This is also known as <b>call by reference</b>. 

It is possible to declare a pointer pointing to a function which can then be used as an argument in another function. A pointer to a function is declared as follows,

<mark>type (*pointer-name)(parameter);</mark>

Here is an example :

int (*sum)();   //legal declaration of pointer to function
int *sum();     //This is not a declaration of pointer to function

A function pointer can point to a specific function when it is assigned the name of that function.

int sum(int, int);
int (*fp)(int, int);
fp = sum;

Here <mark>fp</mark> is a pointer to a function <mark>sum</mark>. Now sum can be called using function pointer s along with providing the required argument values.

fp (10, 20);";
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
          <div class="bread-title"><h2>C Program to Demonstrate Pointers to Functions</h2></div>
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
				<h2 class="blog-title">C Program to Demonstrate Pointers to Functions</h2>
				<p>In this program, you will learn to use pointers to functions. 

Pointer as a function parameter is used to hold addresses of arguments passed during function call. This is also known as <b>call by reference</b>. 

It is possible to declare a pointer pointing to a function which can then be used as an argument in another function. A pointer to a function is declared as follows,

<mark>type (*pointer-name)(parameter);</mark>

Here is an example :

int (*sum)();   //legal declaration of pointer to function
int *sum();     //This is not a declaration of pointer to function

A function pointer can point to a specific function when it is assigned the name of that function.

int sum(int, int);
int (*fp)(int, int);
fp = sum;

Here <mark>fp</mark> is a pointer to a function <mark>sum</mark>. Now sum can be called using function pointer s along with providing the required argument values.

fp (10, 20);</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
int sum(int x, int y)
{
    return x+y;
}
void main()
{
    int s;
    int(*fp)(int, int);
    fp = sum;
    s = fp(10,12);
    printf("Sum = %d", s);
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Sum = 22</code></pre>
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