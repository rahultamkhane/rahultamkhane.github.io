<?php 
require("../../../libs/config.php");
$title = "C++ Program to Read a String with Spaces and Display it on Console";
$description = "In this program, we will read a string with spaces using gets() function. The puts() function is used to display the entered string. <br><br>The function <mark>gets()</mark> : Reads characters from the standard input and stores them as a string. It stops when either the newline character is read or when the end-of-file is reached, whichever comes first. <br><br>The function <mark>puts()</mark> : prints characters from the standard output. <br><br>The <mark>cin>>)</mark> function reads a single word (without spaces), however <mark>gets()</mark> reads a line of string (with spaces)
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
          <div class="bread-title"><h2>C++ Program to Read a String with Spaces and Display it on Console</h2></div>
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
				<h2 class="blog-title">C++ Program to Read a String with Spaces and Display it on Console</h2>
				<p>In this program, we will read a string with spaces using gets() function. The puts() function is used to display the entered string. <br><br>The function <mark>gets()</mark> : Reads characters from the standard input and stores them as a string. It stops when either the newline character is read or when the end-of-file is reached, whichever comes first. <br><br>The function <mark>puts()</mark> : prints characters from the standard output. <br><br>The <mark>cin>>)</mark> function reads a single word (without spaces), however <mark>gets()</mark> reads a line of string (with spaces)
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
    char name[30];
    cout&lt;&lt;"Enter the line of text: ";
    gets(name);
    cout&lt;&lt;"\nYou entered the text....\n";
    puts(name);
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the line of text: Welcome to the world of C++ Programming!

You entered the text....
Welcome to the world of C++ Programming!
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