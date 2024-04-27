<?php 
require("../../../libs/config.php");
$title = "C Program to Search for an Element in Array (Using Linear Search Method)";
$description = "In this program, the user is asked to enter 10 elements in an array. After that user is ask for element that he/she wants to search in an Array. Then we search an element from starting to end until it is found. Finally, we display whether element is found or not on the screen.";
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
          <div class="bread-title"><h2>C Program to Search for an Element in Array (Using Linear Search Method)</h2></div>
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
				<h2 class="blog-title">C Program to Search for an Element in Array (Using Linear Search Method)</h2>
				<p>In this program, the user is asked to enter 10 elements in an array. After that user is ask for element that he/she wants to search in an Array. Then we search an element from starting to end until it is found. Finally, we display whether element is found or not on the screen.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include &lt;stdio.h&gt;
#include&lt;conio.h&gt;
void main( )
{
    int arr[10], search, i;
    printf("Enter 10 numbers\n");
    for (i = 0; i &lt; 10; i++)
        scanf("%d", &arr[i]);
    printf("Enter a number to search\n");
    scanf("%d", &search);
    for (i = 0; i &lt; 10; i++)
    {
        if (arr[i] == search)   /* Check element is found */
        {
            printf("Number is found at location %d.", i+1);
            break;
        }
    }
    if (i == 10)
        printf("Number is not found in the array.", search);
    getch( );
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 10 numbers
4 3 7 2 9 6 5 1 8 10
Enter a number to search
5
Number is found at location 7.</code></pre>
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