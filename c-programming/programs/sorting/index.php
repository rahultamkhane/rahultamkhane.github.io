<?php 
require("../../../libs/config.php");
$title = "C Program to Sort an Array (Using Bubble Sort Method)";
$description = "In this program, the user is asked to enter 10 elements in an array. Then we perform a sort on the given array. First we check for 1st element is greater than 2nd element, if so then we swap (exchange) both elements. Then we check for 2nd and 3rd elements for greater than and so on. This technique is called as 'Bubble Sort'. Finally, we display the sorted array. By default here we sort the array in Ascending order, if you want to sort in descending order then you have to change the condition like    if(a[j] < a[j+1])";
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
          <div class="bread-title"><h2>C Program to Sort an Array (Using Bubble Sort Method)</h2></div>
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
				<h2 class="blog-title">C Program to Sort an Array (Using Bubble Sort Method)</h2>
				<p>In this program, the user is asked to enter 10 elements in an array. Then we perform a sort on the given array. First we check for 1st element is greater than 2nd element, if so then we swap (exchange) both elements. Then we check for 2nd and 3rd elements for greater than and so on. This technique is called as "Bubble Sort". Finally, we display the sorted array. By default here we sort the array in Ascending order, if you want to sort in descending order then you have to change the condition like    if(a[j] < a[j+1])</p>
				
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
    int a[10], i, j, temp;
    printf("Enter 10 array elements\n");
    for (i = 0; i &lt; 10; i++)
    {
        scanf("%d", &a[i]);
    }
    printf("Array elements are..\n");
    for(i = 0; i&lt; 10; i++)
    {
        printf("%d ", a[i]);
    }
    /* Sorting logic starts here */
    for(i = 0; i &lt; 10; i++)
    {
        for(j = 0; j &lt; 9; j++)
        {
            if(a[j] &gt; a[j+1])
            {
                temp = a[j];
                a[j] = a[j+1];
                a[j+1] = temp;
            }
        }
    }
    printf("\n\nArray elements in Ascending order are..\n");
    for(i = 0; i&lt; 10; i++)
    {
        printf("%d ", a[i]);
    }
    getch( );
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 10 array elements
32 14 20 45 2 66 47 23 30 94
Array elements are..
32 14 20 45 2 66 47 23 30 94

Array elements in Ascending order are..
2 14 20 23 30 32 45 47 66 94</code></pre>
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