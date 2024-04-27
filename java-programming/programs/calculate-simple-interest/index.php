<?php 
require("../../../libs/config.php");
$title = "Java Program to Calculate Simple Interest";
$description = "Write a Java program to accept principal amount, rate of interest, no. of years from the user and display the simple interest.";
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
          <div class="bread-title"><h2>Java Program to Calculate Simple Interest</h2></div>
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
				<h2 class="blog-title">Java Program to Calculate Simple Interest</h2>
				<p>Write a Java program to accept principal amount, rate of interest, no. of years from the user and display the simple interest.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;	// Import Language package
import java.util.*;	// Import Utility package to accept data

class SimpleInterest {

	int amount;		// data member declaration
	float rate;
	float years;
	double SI;
	
	SimpleInterest(int a, float r, float y) // Constructor to initialize data members
	{
		amount = a;
		rate = r;
		years = y;
	}
	
	void calSI()	// method to calculate simple interest
	{
		
		SI = (amount*rate*years)/100;
		System.out.println("Simple Interest = "+SI);
	}

	public static void main(String args[])
	{
		Scanner s = new Scanner(System.in);
		System.out.print("Enter Principal Amount :: ");
		int amt = s.nextInt();	// Converting string to int
		System.out.print("Enter Rate of Interest :: ");
		float rt = s.nextFloat();
		System.out.print("Enter No. of years :: ");
		float yrs = s.nextFloat();
		SimpleInterest e = new SimpleInterest(amt,rt,yrs);
		e.calSI();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac SimpleInterest.java
C:\>java SimpleInterest
Enter Principal Amount :: 3000
Enter Rate of Interest :: 5
Enter No. of years :: 4
Simple Interest = 600.0
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