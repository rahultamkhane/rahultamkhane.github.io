<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display the Details of Book Using Structure";
$description = "In this program, you'll learn to declare structure 'book' having data member as  book_name, book_id,  book_price, author. Accept this data for 3 books and display it.
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
          <div class="bread-title"><h2>C++ Program to Display the Details of Book Using Structure</h2></div>
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
				<h2 class="blog-title">C++ Program to Display the Details of Book Using Structure</h2>
				<p>In this program, you'll learn to declare structure "book" having data member as  book_name, book_id,  book_price, author. Accept this data for 3 books and display it.
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
    float book_price;
    char author[15];
};

int main()
{
    struct book b[3];
    int i;
    
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;"\nEnter details of book #"&lt;&lt; i+1;
        cout&lt;&lt;"\nEnter book id: ";
        cin&gt;&gt; b[i].bookid;
        cout&lt;&lt;"Enter book name: ";
        cin&gt;&gt; b[i].book_name;
        cout&lt;&lt;"Enter book author: ";
        cin&gt;&gt; b[i].author;
        cout&lt;&lt;"Enter book price: ";
        cin&gt;&gt; b[i].book_price;
    }

    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;"\n\n*** Book  "&lt;&lt; i+1 &lt;&lt; " ***";
        cout&lt;&lt;"\nBook Id: " &lt;&lt; b[i].bookid;
        cout&lt;&lt;"\nBook Name: " &lt;&lt; b[i].book_name;
        cout&lt;&lt;"\nBook Author: " &lt;&lt; b[i].author;
        cout&lt;&lt;"\nBook price: " &lt;&lt; b[i].book_price;
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter details of book #1
Enter book id: 101
Enter book name: LetUsC
Enter book author: Kanetkar
Enter book price: 350.20

Enter details of book #2
Enter book id: 102
Enter book name: ANSI_C
Enter book author: Balgurusamy
Enter book price: 300.78

Enter details of book #3
Enter book id: 103
Enter book name: OperatingSystem
Enter book author: Godbole
Enter book price: 295.67

*** Book 1 ***
Book Id: 101
Book Name: LetUsC
Book Author: Kanetkar
Book price: 350.200012

*** Book 2 ***
Book Id: 102
Book Name: ANSI_C
Book Author: Balgurusamy
Book price: 300.779999

*** Book 3 ***
Book Id: 103
Book Name: OperatingSystem
Book Author: Godbole
Book price: 295.670013
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