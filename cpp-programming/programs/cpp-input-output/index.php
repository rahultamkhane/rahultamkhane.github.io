<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display the Numbers Entered by User";
$description = "In this program, you will learn to get the input from user and display them on console.<br>Here we have used  <mark>cin</mark> and <mark>cout</mark> statements.<br><br>The C++ <mark>cout</mark> statement is the instance of the <mark>ostream</mark> class. It is used to produce output on the standard output device which is usually the display screen which is inserted in the standard output stream (cout) using the <mark>insertion operator(<<)</mark>.<br><br>The C++ <mark>cin</mark> statement is the instance of the class <mark>istream</mark> and is used to read input from the standard input device which is usually a keyboard. The <mark>extraction operator(>>)</mark> is used along with the object cin for reading inputs. The extraction operator extracts the data from the object cin which is entered using the keyboard.<br><br>We have to include “<mark>iostream.h</mark>” file as shown in below C++ program to make use of these <mark>cin</mark> and <mark>cout</mark> statements in C++ language.
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
          <div class="bread-title"><h2>C++ Program to Display the Numbers Entered by User</h2></div>
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
				<h2 class="blog-title">C++ Program to Display the Numbers Entered by User</h2>
				<p>In this program, you will learn to get the input from user and display them on console.<br>Here we have used  <mark>cin</mark> and <mark>cout</mark> statements.<br><br>The C++ <mark>cout</mark> statement is the instance of the <mark>ostream</mark> class. It is used to produce output on the standard output device which is usually the display screen which is inserted in the standard output stream (cout) using the <mark>insertion operator(<<)</mark>.<br><br>The C++ <mark>cin</mark> statement is the instance of the class <mark>istream</mark> and is used to read input from the standard input device which is usually a keyboard. The <mark>extraction operator(>>)</mark> is used along with the object cin for reading inputs. The extraction operator extracts the data from the object cin which is entered using the keyboard.<br><br>We have to include “<mark>iostream.h</mark>” file as shown in below C++ program to make use of these <mark>cin</mark> and <mark>cout</mark> statements in C++ language.
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


int main()
{
    int num1, num2;
    cout&lt;&lt;"Enter 2 numbers: ";
    cin&gt;&gt;num1&gt;&gt;num2;
    cout&lt;&lt;"The numbers are "&lt;&lt;num1&lt;&lt;" and "&lt;&lt;num2;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 2 numbers: 45 56
The numbers are 45 and 56
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