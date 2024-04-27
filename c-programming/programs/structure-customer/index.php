<?php 
require("../../../libs/config.php");
$title = "C Program to Display Customer Details in Hotel Using Structue";
$description = "This program will store the records in a structure 'hotel' as customer name, address,
period of stay, type of room allotted & room charges.";
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
          <div class="bread-title"><h2>C Program to Display Customer Details in Hotel Using Structue</h2></div>
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
				<h2 class="blog-title">C Program to Display Customer Details in Hotel Using Structue</h2>
				<p>This program will store the records in a structure 'hotel' as customer name, address,
period of stay, type of room allotted & room charges.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
struct hotel
{
    char customer_name[20];
    char address[20];
    int period_of_stay;
    char types_of_room[10];
    int room_charges;
}h[3];

void main()
{
    int i;
    //clrscr();
    for(i=0;i&lt;3;i++)
    {
        printf("Enter customer name: ");
        scanf("%s", &h[i].customer_name);
        printf("Enter address: ");
        scanf("%s", &h[i].address);
        printf("Enter period of stay: ");
        scanf("%d", &h[i].period_of_stay);
        printf("Enter types of room: ");
        scanf("%s", &h[i].types_of_room);
        printf("Enter room charges: ");
        scanf("%d", &h[i].room_charges);
    }
    for(i=0;i&lt;3;i++)
    {
        printf("\n Customer name is %s", h[i].customer_name);
        printf("\n Address = %s", h[i].address);
        printf("\n Period of stay = %d", h[i].period_of_stay);
        printf("\n Types of stay = %s", h[i].types_of_room);
        printf("\n Room charges = %d", h[i].room_charges);
    }
    getch();
}</code></pre>
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
 Room charges = 600</code></pre>
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