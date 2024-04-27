<?php 
require("../../../libs/config.php");
$title = "C Program to Check a Number is Prime Number or not";
$description = "In this program, the user is ask to enter a number, then that number is determined whether it is Prime or not.

Prime numbers are special numbers, greater than 1, that have exactly two factors, themselves and 1. 

19 is a prime number. It can only be divided by 1 and 19. 

The prime numbers below 20 are: 2, 3, 5, 7, 11, 13, 17, 19. ...";
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
          <div class="bread-title"><h2>C Program to Check a Number is Prime Number or not</h2></div>
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
				<h2 class="blog-title">C Program to Check a Number is Prime Number or not</h2>
				<p>In this program, the user is ask to enter a number, then that number is determined whether it is Prime or not.

Prime numbers are special numbers, greater than 1, that have exactly two factors, themselves and 1. 

19 is a prime number. It can only be divided by 1 and 19. 

The prime numbers below 20 are: 2, 3, 5, 7, 11, 13, 17, 19. ...</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include &lt;stdio.h&gt;
#include&lt;conio.h&gt;
void main()
{
    int no, i, isPrime = 1;
    printf("Enter the number : ");
    scanf("%d", &no);
    for (i = 2; i &lt;= no/2; i++)
    {
        if (no  % i == 0)
        {
            isPrime = 0;
            break;
        }
    }
    if (isPrime == 1)
    {
        printf("%d is a Prime number", no);
    }
    else
    {
        printf("%d is not a Prime number", no);
    }
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the number : 17
17 is a Prime number

Enter the number : 74
74 is not a Prime number</code></pre>
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