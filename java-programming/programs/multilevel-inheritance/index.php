<?php 
require("../../../libs/config.php");
$title = "Java Program to Implement Multi-Level Inheritance (Account -> Saving_Acc -> Acct_Details)";
$description = "Write a Java program to implement multi-level inheritance (account -> saving_acc -> acct_details)<br><br>
Write a Java program to implement the following multi level inheritance:<br><br>

class: account <br>
  cust_name , acc_no<br><br>

class: saving_acc<br>
  min_bal, saving_bal<br><br>

class:acct_details<br>
  deposits, withdrawals";
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
          <div class="bread-title"><h2>Java Program to Implement Multi-Level Inheritance (Account -> Saving_Acc -> Acct_Details)</h2></div>
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
				<h2 class="blog-title">Java Program to Implement Multi-Level Inheritance (Account -> Saving_Acc -> Acct_Details)</h2>
				<p>Write a Java program to implement multi-level inheritance (account -> saving_acc -> acct_details)<br><br>
Write a Java program to implement the following multi level inheritance:<br><br>

class: account <br>
  cust_name , acc_no<br><br>

class: saving_acc<br>
  min_bal, saving_bal<br><br>

class:acct_details<br>
  deposits, withdrawals</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;

class Account {
	
	String cust_name;
	int acc_no;
	
	Account(String a, int b) {
		
		cust_name=a;
		acc_no=b;
	}
	
	void display() {
		
		System.out.println ("Customer Name: "+cust_name);
		System.out.println ("Account No: "+acc_no);
	}
}

class Saving_Acc extends Account {

	int min_bal,saving_bal;
	
	Saving_Acc(String a, int b, int c, int d) {
		
		super(a,b);
		min_bal=c;
		saving_bal=d;
	}
	
	void display() {
		
		super.display();
		System.out.println ("Minimum Balance: "+min_bal);
		System.out.println ("Saving Balance: "+saving_bal);
	}
}

class Acct_Details extends Saving_Acc {
	
	int deposits, withdrawals;
	
	Acct_Details(String a, int b, int c, int d, int e, int f) {
		
		super(a,b,c,d);
		deposits=e;
		withdrawals=f;
	}
	
	void display() {
		
		super.display();
		System.out.println ("Deposit: "+deposits);
		System.out.println ("Withdrawals: "+withdrawals);
	}
}

public class MultiLevelInh {

	public static void main(String[] args) {
		
		Acct_Details A = new Acct_Details("Pankaj",666,1000,5000,500,9000);
		A.display();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Customer Name: Pankaj
Account No: 666
Minimum Balance: 1000
Saving Balance: 5000
Deposit: 500
Withdrawals: 9000
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