<?php 
require("../../../libs/config.php");
$title = "C++ Program to Add Two Numbers Using Function";
$description = "In this program, you'll learn to add two numbers using function.<br>A function is a block of statements that performs a specific task. Let's say you are writing a C program and you need to perform a same task in that program more than once. In such case you have two options: <br>a) Use the same set of statements every time you want to perform the task. <br>b) Create a function to perform that task, and just call it every time you need to perform that task.
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
          <div class="bread-title"><h2>C++ Program to Add Two Numbers Using Function</h2></div>
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
				<h2 class="blog-title">C++ Program to Add Two Numbers Using Function</h2>
				<p>In this program, you'll learn to add two numbers using function.<br>A function is a block of statements that performs a specific task. Let's say you are writing a C program and you need to perform a same task in that program more than once. In such case you have two options: <br>a) Use the same set of statements every time you want to perform the task. <br>b) Create a function to perform that task, and just call it every time you need to perform that task.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include&lt;iostream&gt;
using namespace std;

void add(int, int);
int main()
{
    int a, b;
    
    cout&lt;&lt;"Enter two number: ";
    cin&gt;&gt;a&gt;&gt;b;
    add(a,b);
    return 0;
}
void add(int a, int b)
{
    cout&lt;&lt;"Addition of "&lt;&lt;a&lt;&lt;" and "&lt;&lt;b&lt;&lt;" is"&lt;&lt;a+b;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter two number: 12 68
Addition of 12 and 68 is 80
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