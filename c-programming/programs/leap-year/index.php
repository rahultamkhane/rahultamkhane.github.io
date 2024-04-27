<?php 
require("../../../libs/config.php");
$title = "C Program to Check Whether a Year is Leap Year or not";
$description = "In this program, you'll learn to check given year is Leap Year or not.

A year is leap if it divisible by 4. A year is a leap year if it satisfy following conditions:

1) It is evenly divisible by 100
2) If it is divisible by 100, then it should also be divisible by 400
3) Except this, all other years evenly divisible by 4 are leap years.";
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
          <div class="bread-title"><h2>C Program to Check Whether a Year is Leap Year or not</h2></div>
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
				<h2 class="blog-title">C Program to Check Whether a Year is Leap Year or not</h2>
				<p>In this program, you'll learn to check given year is Leap Year or not.

A year is leap if it divisible by 4. A year is a leap year if it satisfy following conditions:

1) It is evenly divisible by 100
2) If it is divisible by 100, then it should also be divisible by 400
3) Except this, all other years evenly divisible by 4 are leap years.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

int main()
{
    int year;
    printf("Enter the year: ");
    scanf("%d",&year);

    if(((year % 4 == 0) && (year % 100!= 0)) || (year%400 == 0))
    {
        printf("Year %d is a Leap year",year);
    }
    else
    {
        printf("Year %d is not a Leap year",year);
    }
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the year: 2016
Year 2016 is a Leap year

Enter the year: 2050
Year 2050 is not a Leap year</code></pre>
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