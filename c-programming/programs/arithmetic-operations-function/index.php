<?php 
require("../../../libs/config.php");
$title = "C Program to Display Arithmetic Operations Using Function";
$description = "In this program, we will perform arithmetic operations using function.

A function is a block of statements that performs a specific task. Let's say you are writing a C program and you need to perform a same task in that program more than once. In such case you have two options: 
a) Use the same set of statements every time you want to perform the task. 
b) Create a function to perform that task, and just call it every time you need to perform that task.";
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
          <div class="bread-title"><h2>C Program to Display Arithmetic Operations Using Function</h2></div>
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
				<h2 class="blog-title">C Program to Display Arithmetic Operations Using Function</h2>
				<p>In this program, we will perform arithmetic operations using function.

A function is a block of statements that performs a specific task. Let's say you are writing a C program and you need to perform a same task in that program more than once. In such case you have two options: 
a) Use the same set of statements every time you want to perform the task. 
b) Create a function to perform that task, and just call it every time you need to perform that task.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;

void add(int p,int q);
void subtraction (int p,int q);
void multiplication(int p,int q);
void division(int p,int q);

void main()
{
    int a, b, sum, sub, mul, div;
    //clrscr();
    printf("Enter two numbers: ");
    scanf("%d %d",&a, &b);
    add(a, b);
    subtraction(a, b);
    multiplication(a, b);
    division(a, b);
    getch();
}
void add(int p, int q)
{
    int sum;
    sum = p + q;
    printf("Addition of a numbers is %d\n", sum);
}
void subtraction(int p, int q)
{
    int sub;
    sub = p - q;
    printf("subtraction of a number is %d\n", sub);
}
void multiplication(int p, int q)
{
    int mul;
    mul = p * q;
    printf("Multiplication of a number is %d\n", mul);
}
void division(int p, int q)
{
    float div;
    div = p / q;
    printf("Division of a number is %f", div);
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter two numbers: 8 3
Addition of a numbers is 11
subtraction of a number is 5
Multiplication of a number is 24
Division of a number is 2.000000</code></pre>
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