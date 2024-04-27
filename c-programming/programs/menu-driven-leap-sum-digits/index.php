<?php 
require("../../../libs/config.php");
$title = "C Program for Menu Driven Leap Year and Sum of Digits";
$description = "In this program, you'll learn menu driven program to find leap year and sum of digits.";
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
          <div class="bread-title"><h2>C Program for Menu Driven Leap Year and Sum of Digits</h2></div>
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
				<h2 class="blog-title">C Program for Menu Driven Leap Year and Sum of Digits</h2>
				<p>In this program, you'll learn menu driven program to find leap year and sum of digits.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c"># include &lt;stdio.h&gt;
# include &lt;conio.h&gt;
void main ()
{
    int ch=0,year;
    int rem=0,sum=0,num;
    // clrscr();
    printf("1. To find leap year\n");
    printf("2. To print sum of digits of a number\n");
    printf("Enter a choice : ");
    scanf ("%d",&ch);

    switch(ch)
    {
        case 1:
            printf("Enter year: ");
            scanf("%d", &year);
            if(year%4 == 0)
                printf("Its a leap year ");
            else
                printf("Its not a leap year ");
            break;

        case 2:
            printf("Enter a number: ");
            scanf("%d", &num);
            while(num != 0)
            {
                rem = num % 10;
                sum = sum + rem;
                num = num / 10;
            }
            printf("Sum of Digits is %d",sum);
            break;

        default:
            printf("Invalid choice!!!");
            break;
    }
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">1. To find leap year
2. To print sum of digits of a number
Enter a choice : 1
Enter year: 1958
Its not a leap year

1. To find leap year
2. To print sum of digits of a number
Enter a choice : 2
Enter a number: 287
Sum of Digits is 17</code></pre>
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