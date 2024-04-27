<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display Customer Details in Hotel Using Structure";
$description = "This program will store the records in a structure 'hotel' as customer name, address, period of stay, type of room allotted & room charges.
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
          <div class="bread-title"><h2>C++ Program to Display Customer Details in Hotel Using Structure</h2></div>
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
				<h2 class="blog-title">C++ Program to Display Customer Details in Hotel Using Structure</h2>
				<p>This program will store the records in a structure 'hotel' as customer name, address, period of stay, type of room allotted & room charges.
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

struct hotel
{
    char customer_name[20];
    char address[20];
    int period_of_stay;
    char types_of_room[10];
    int room_charges;
} h[3];

int main()
{
    int i;
    for(i=0;i&lt;3;i++)
    {
        cout&lt;&lt;"Enter customer name: ";
        cin&gt;&gt; h[i].customer_name;
        cout&lt;&lt;"Enter address: ";
        cin&gt;&gt; h[i].address;
        cout&lt;&lt;"Enter period of stay: ";
        cin&gt;&gt; h[i].period_of_stay;
        cout&lt;&lt;"Enter types of room: ";
        cin&gt;&gt; h[i].types_of_room;
        cout&lt;&lt;"Enter room charges: ";
        cin&gt;&gt; h[i].room_charges;
    }
    for(i=0;i&lt;3;i++)
    {
        cout&lt;&lt;"\n Customer name is " &lt;&lt; h[i].customer_name;
        cout&lt;&lt;"\n Address = " &lt;&lt; h[i].address;
        cout&lt;&lt;"\n Period of stay = " &lt;&lt; h[i].period_of_stay;
        cout&lt;&lt;"\n Types of stay = " &lt;&lt; h[i].types_of_room;
        cout&lt;&lt;"\n Room charges = " &lt;&lt; h[i].room_charges;
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter customer name: Soham
Enter address: Pune
Enter period of stay: 3
Enter types of room: AC
Enter room charges: 600
Enter customer name: Dinesh
Enter address: Mumbai
Enter period of stay: 2
Enter types of room: Non-AC
Enter room charges: 300
Enter customer name: Kamlesh
Enter address: Pune
Enter period of stay: 4
Enter types of room: AC
Enter room charges: 600

 Customer name is Soham
 Address = Pune
 Period of stay = 3
 Types of stay = AC
 Room charges = 600
 Customer name is Dinesh
 Address = Mumbai
 Period of stay = 2
 Types of stay = Non-AC
 Room charges = 300
 Customer name is Kamlesh
 Address = Pune
 Period of stay = 4
 Types of stay = AC
 Room charges = 600
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