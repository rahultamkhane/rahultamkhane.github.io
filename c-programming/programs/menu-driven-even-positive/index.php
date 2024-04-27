<?php 
require("../../../libs/config.php");
$title = "C Program for Menu Driven Even and Positive Number";
$description = "In this program, you'll learn menu driven program to find even/odd and positive/negative number.";
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
          <div class="bread-title"><h2>C Program for Menu Driven Even and Positive Number</h2></div>
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
				<h2 class="blog-title">C Program for Menu Driven Even and Positive Number</h2>
				<p>In this program, you'll learn menu driven program to find even/odd and positive/negative number.</p>
				
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
    int ch, num;
    // clrscr();
    printf("1. To find even or odd no.\n");
    printf("2. To find positive or negative no.\n");
    printf("Enter a choice : ");
    scanf ("%d",&ch);

    switch(ch)
    {
        case 1:
            printf("Enter a number: ");
            scanf("%d", &num);
            if(num%2 == 0)
                printf("EVEN number");
            else
                printf("ODD number");
            break;

        case 2:
            printf("Enter a number: ");
            scanf("%d", &num);
            if(num &gt; 0)
                printf("POSITIVE number");
            else
                printf("NEGATIVE number");
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
					<pre class="hljs"><code class="plaintext p-3">1. To find even or odd no.
2. To find positive or negative no.
Enter a choice : 1
Enter a number: 75
ODD number

1. To find even or odd no.
2. To find positive or negative no.
Enter a choice : 2
Enter a number: -75
NEGATIVE number</code></pre>
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