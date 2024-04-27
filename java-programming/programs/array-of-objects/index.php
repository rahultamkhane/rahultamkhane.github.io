<?php 
require("../../../libs/config.php");
$title = "Java Program for Array of objects ";
$description = "Write a Java program to define a class item containing code and price. Accept this data for  five object using array of objects. Display code, price in tabular form and also,  display total price of all items.";
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
              <li><a href="<?php echo SITE_DIR;?>java-programming/">Java Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>java-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>Java Program for Array of objects </h2></div>
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
				<h2 class="blog-title">Java Program for Array of objects </h2>
				<p>Write a Java program to define a class item containing code and price. Accept this data for  five object using array of objects. Display code, price in tabular form and also,  display total price of all items.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

class Item {

	String code;
	int price;
	
	Item(String c,int p) {
		
		code = c;
		price = p;
	}
	
	public static void main(String args[])throws IOException
	{
		Item[] I = new Item[5];
		String a;
		int b,total_cost=0;
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		
		for(int i=0;i&lt;5;i++) {
			
			System.out.print("Enter code  for item"+(i+1)+" : ");
			a = br.readLine();
			System.out.print("Enter price for item"+(i+1)+" : ");
			b = Integer.parseInt(br.readLine());
			I[i] = new Item(a,b);
		}
		
		System.out.println("Item Code Item Price");
		System.out.println("--------- ----------");
		for(int i=0;i&lt;5;i++)
		{
			System.out.print("\t"+I[i].code);
			System.out.println("\t\t"+I[i].price);
			total_cost = total_cost + I[i].price;
		}
		System.out.print("Total Price = "+total_cost);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac Item.java
C:\>java Item
Enter code  for item1 : 101
Enter price for item1 : 54
Enter code  for item2 : 102
6Enter price for item2 : 4
Enter code  for item3 : 106
Enter price for item3 : 75
Enter code  for item4 : 103
Enter price for item4 : 45
Enter code  for item5 : 105
Enter price for item5 : 95
Item Code Item Price
--------- ----------
   101         54
   102         40
   106         75
   103         45
   105         95
Total Price = 309
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
include$_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php";
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>