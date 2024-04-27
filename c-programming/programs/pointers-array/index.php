<?php 
require("../../../libs/config.php");
$title = "C Program to Display Array of Pointers";
$description = "In this program, you will learn to display array elements using array of pointers. 

“<mark>Array of pointers</mark>” is an array of the pointer variables. It is also known as <mark>pointer arrays</mark>. 

Syntax: 
<mark>int *var_name[array_size];</mark>

We can make separate pointer variables which can point to the different values or we can make one integer array of pointers that can point to all the values.";
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
          <div class="bread-title"><h2>C Program to Display Array of Pointers</h2></div>
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
				<h2 class="blog-title">C Program to Display Array of Pointers</h2>
				<p>In this program, you will learn to display array elements using array of pointers. 

“<mark>Array of pointers</mark>” is an array of the pointer variables. It is also known as <mark>pointer arrays</mark>. 

Syntax: 
<mark>int *var_name[array_size];</mark>

We can make separate pointer variables which can point to the different values or we can make one integer array of pointers that can point to all the values.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c"># include&lt;stdio.h&gt;
void main()
{
    int *arr[4];
    int i=31, j=5, k=19, l=71, m;
    arr[0] = &i;
    arr[1] = &j;
    arr[2] = &k;
    arr[3] = &l;
    for (m=0; m&lt;=3; m++)
        printf("%d\n", *(arr[m]));
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">31
5
19
71</code></pre>
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