<?php 
require("../../../libs/config.php");
$title = "C++ Program to Read and Display Data Using Structures";
$description = "In this program, you'll learn to declare structure book having data member as book_name, bookid, book_price. Accept this data for 3 books and display it.
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
          <div class="bread-title"><h2>C++ Program to Read and Display Data Using Structures</h2></div>
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
				<h2 class="blog-title">C++ Program to Read and Display Data Using Structures</h2>
				<p>In this program, you'll learn to declare structure book having data member as book_name, bookid, book_price. Accept this data for 3 books and display it.
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
struct book
{
    char book_name[20];
    int bookid;
    int book_price;
} b[3];

int main()
{
    int i;
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;"Enter details for book " &lt;&lt; i+1;
        cin&gt;&gt; b[i].book_name;
        cin&gt;&gt; b[i].bookid;
        cin&gt;&gt; b[i].book_price;
    }
    cout&lt;&lt;"\nDetails of books :\n";
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt; b[i].book_name &lt;&lt; " ";
        cout&lt;&lt; b[i].bookid &lt;&lt; " ";
        cout&lt;&lt; b[i].book_price &lt;&lt; "\n";
    }
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter details for book 1 PCI 101 300
Enter details for book 2 BCC 102 350
Enter details for book 3 WPD 103 250

Details of books :
PCI 101 300
BCC 102 350
WPD 103 250
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