<?php 
require("../../../libs/config.php");
$title = "C Program to Display Fibonacci Series Using Recursion";
$description = "In this program, we will display Fibonacci Series upto the user provided terms using Recursion.

Recursion is the process of defining a problem n terms of itself. 

A recursive function is a function that calls itself during its execution. The process may repeat several times, outputting the result and the end of each iteration. The function fact() in program uses recursion to find factorial of a number.

The Fibonacci Sequence is the series of numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34. Here the next number is the sum of previous two numbers.";
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
          <div class="bread-title"><h2>C Program to Display Fibonacci Series Using Recursion</h2></div>
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
				<h2 class="blog-title">C Program to Display Fibonacci Series Using Recursion</h2>
				<p>In this program, we will display Fibonacci Series upto the user provided terms using Recursion.

Recursion is the process of defining a problem n terms of itself. 

A recursive function is a function that calls itself during its execution. The process may repeat several times, outputting the result and the end of each iteration. The function fact() in program uses recursion to find factorial of a number.

The Fibonacci Sequence is the series of numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34. Here the next number is the sum of previous two numbers.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
long int fib(long int n);
void main()
{
    long int res, n;
    int i;
    printf("Enter the number of terms: ");
    scanf("%ld", &n);
    for(i=0; i&lt;n; i++)
    {
        res = fib(i);
        printf("%ld, ",res);
    }
    getch();
}
long int fib(long int n)
{
    if(n==0 || n==1)
        return (n);
    else
        return fib(n-1) + fib(n-2);
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the number of terms: 12
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, </code></pre>
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