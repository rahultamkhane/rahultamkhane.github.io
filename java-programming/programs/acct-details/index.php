<?php 
require("../../../libs/config.php");
$title = "Java Program to Achieve Multiple Inheritance Using Interface (Bank, Customer, Account)";
$description = "Write a Java program to achieve Multiple Inheritance using Interface (Bank, Customer, Account).";
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
          <div class="bread-title"><h2>Java Program to Achieve Multiple Inheritance Using Interface (Bank, Customer, Account)</h2></div>
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
				<h2 class="blog-title">Java Program to Achieve Multiple Inheritance Using Interface (Bank, Customer, Account)</h2>
				<p>Write a Java program to achieve Multiple Inheritance using Interface (Bank, Customer, Account).</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">interface Bank {
	
	float rate = 12.0f;
	int no_of_years=3;
	void show();
}

class Customer {
	
	String cust_name;
	int cust_id;
	Customer(String n,int i) {
		
		cust_name = n;
		cust_id = i;
	}
	
	void display() {
		
		System.out.println("Customer Name = "+cust_name);
		System.out.println("Customer Id = "+cust_id);
	}
}

class Account extends Customer implements Bank {
	
	int acc_no;
	float acc_bal;
	Account(String n,int b,int x,float y) {
		
		super(n,b);
		acc_no=x;
		acc_bal=y;
	}
	
	public void show() {
		
		display();
		System.out.println("Account No. = "+acc_no);
		System.out.println("Account Balance = "+acc_bal);
	}
	
	void interest() {
		
		show();
		float intr = (rate*acc_bal*no_of_years)/100;
		System.out.println("Interest = "+intr);
	}
}

public class Acct_Details {

	public static void main (String[] args) 
	{
		Account ac = new Account("Sameer",8,4052,5000);
		ac.interest();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Customer Name = Sameer
Customer Id = 8
Account No. = 4052
Account Balance = 5000.0
Interest = 1800.0
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