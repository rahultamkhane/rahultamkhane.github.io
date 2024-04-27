<?php 
require("../../../libs/config.php");
$title = "C Program to Print Prime Numbers Upto N";
$description = "In this program, we will display the prime number from 1 to N provided by user. <br><br> Prime numbers are special numbers, greater than 1, that have exactly two factors, themselves and 1.<br><br>19 is a prime number. It can only be divided by 1 and 19.<br><br>The prime numbers below 20 are: 2, 3, 5, 7, 11, 13, 17, 19. ...
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
          <div class="bread-title"><h2>C Program to Print Prime Numbers Upto N</h2></div>
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
				<h2 class="blog-title">C Program to Print Prime Numbers Upto N</h2>
				<p>In this program, we will display the prime number from 1 to N provided by user. <br><br> Prime numbers are special numbers, greater than 1, that have exactly two factors, themselves and 1.<br><br>19 is a prime number. It can only be divided by 1 and 19.<br><br>The prime numbers below 20 are: 2, 3, 5, 7, 11, 13, 17, 19. ...
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

int main()
{
    int i, start = 1, end = 50, isPrime;
    cout&lt;&lt;"Prime numbers between 1 to 50 are: \n";

    while (start &lt;= end)
    {
        isPrime = 1;

        for(i = 2; i &lt;= start/2; ++i)
        {
            if(start % i == 0)
            {
                isPrime = 0;
                break;
            }
        }

        if (isPrime == 1)
            cout&lt;&lt; start &lt;&lt; ", ";

        ++start;
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Prime numbers between 1 to 50 are:
1, 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47,
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