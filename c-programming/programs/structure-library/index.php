<?php 
require("../../../libs/config.php");
$title = "C Program to Display the Details of Library Using Structure";
$description = "In this program, you'll learn to declare structure "library" having member variables
are acc_no, title, author, price and isIssued. Accept data for three library books and display it.";
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
          <div class="bread-title"><h2>C Program to Display the Details of Library Using Structure</h2></div>
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
				<h2 class="blog-title">C Program to Display the Details of Library Using Structure</h2>
				<p>In this program, you'll learn to declare structure "library" having member variables
are acc_no, title, author, price and isIssued. Accept data for three library books and display it.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

struct library
{
    int acc_no;
    char title[20];
    char author[20];
    float price;
    int isIssued;
};

int main()
{
    struct library book[3];
    int i;

    for(i=0; i&lt;3; i++)
    {
        printf("\nEnter details of Book %d\n", i+1);
        printf("Enter accession no: ");
        scanf("%d", &book[i].acc_no);
        printf("Enter book title: ");
        scanf("%s", book[i].title);
        printf("Enter author: ");
        scanf("%s", book[i].author);
        printf("Enter price: ");
        scanf("%f", &book[i].price);
        printf("Is book issued (0/1): ");
        scanf("%d", &book[i].isIssued);
    }

    printf("\nAcc no, Title, Author, Price, Is Book Issued?\n");
    printf("------------------------------------------------\n");
    for(i=0; i&lt;3; i++)
    {
        printf("\n%d\t%s\t%s\t%f\t%d", book[i].acc_no, book[i].title, book[i].author, book[i].price, book[i].isIssued);
    }
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter details of Book 1
Enter accession no: 1001
Enter book title: C-Programming
Enter author: Mana-Ghosh
Enter price: 400.00
Is book issued (0/1): 1

Enter details of Book 2
Enter accession no: 1003
Enter book title: Networking
Enter author: Tabenbam
Enter price: 500.50
Is book issued (0/1): 0

Enter details of Book 3
Enter accession no: 1004
Enter book title: JavaScript
Enter author: DavidFlanagan
Enter price: 760.00
Is book issued (0/1): 1
------------------------------------------------

1001    C-Programming   Mana-Ghosh      400.000000      1
1003    Networking      Tabenbam        500.500000      0
1004    JavaScript      DavidFlanagan   760.00          1</code></pre>
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