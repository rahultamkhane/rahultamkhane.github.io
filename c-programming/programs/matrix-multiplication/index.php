<?php 
require("../../../libs/config.php");
$title = "C Program to Multiply Two Matrices Using Multidimensional Arrays";
$description = "In this program, the user is asked to enter the elements of the two matrices a and b. Then the elements of these two matrices are multiplied and saved it in third matrix. Finally, the result (third matrix) is printed on the screen.";
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
          <div class="bread-title"><h2>C Program to Multiply Two Matrices Using Multidimensional Arrays</h2></div>
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
				<h2 class="blog-title">C Program to Multiply Two Matrices Using Multidimensional Arrays</h2>
				<p>In this program, the user is asked to enter the elements of the two matrices a and b. Then the elements of these two matrices are multiplied and saved it in third matrix. Finally, the result (third matrix) is printed on the screen.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
void main()
{
    int a[3][3], b[3][3], c[3][3], i, j, k;

    printf("Enter 1st matrix\n");
    for(i=0; i&lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            scanf("%d", &a[i][j]);
        }
    }
    printf("Enter 2nd matrix\n");
    for(i=0; i&lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            scanf("%d", &b[i][j]);
        }
    }

    printf("\nMultiplication of A and B matrices is\n");
    for(i=0; i&lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            c[i][j] = 0;
            for(k=0; k&lt;3; k++)
            {
                c[i][j] = c[i][j] + a[i][k] * b[k][j];
            }
            printf("%d ", c[i][j]);
        }
        printf("\n");
    }
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 1st matrix
1 2 3
4 5 6
7 8 9
Enter 2nd matrix
2 2 2
3 3 3
4 4 4

Multiplication of A and B matrices is
20 20 20
47 47 47
74 74 74</code></pre>
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