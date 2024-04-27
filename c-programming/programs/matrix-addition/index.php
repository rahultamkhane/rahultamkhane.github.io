<?php 
require("../../../libs/config.php");
$title = "C Program to Add Two Matrices Using Multidimensional Arrays";
$description = "In this program, the user is asked to enter the elements of the two matrices a and b. Then the elements of these two matrices are added and saved it in third matrix. Finally, the result (third matrix) is printed on the screen.";
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
          <div class="bread-title"><h2>C Program to Add Two Matrices Using Multidimensional Arrays</h2></div>
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
				<h2 class="blog-title">C Program to Add Two Matrices Using Multidimensional Arrays</h2>
				<p>In this program, the user is asked to enter the elements of the two matrices a and b. Then the elements of these two matrices are added and saved it in third matrix. Finally, the result (third matrix) is printed on the screen.</p>
				
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
    int a[3][3], b[3][3], c[3][3], i, j;

    printf("Enter the first matrix\n");
    for(i=0;i &lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            scanf("%d", &a[i][j]);
        }
    }
    printf("Enter the second matrix\n");
    for(i=0;i &lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            scanf("%d", &b[i][j]);
        }
    }
    printf("Addition of matrices A & B is\n");
    for(i=0;i &lt;3; i++)
    {
        for(j=0; j&lt;3; j++)
        {
            c[i][j] = a[i][j] + b[i][j];
            printf("%2d ", c[i][j]);
        }
        printf("\n");
    }
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the first matrix
1 2 4
4 2 1
8 6 3
Enter the second matrix
1 7 2
5 3 4
8 6 4
Addition of matrices A & B is
 2  9  6
 9  5  5
16 12  7</code></pre>
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