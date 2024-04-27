<?php 
require("../../../libs/config.php");
$title = "Java Program to Achieve Multiple Inheritance Using Interface (Gross, Employee, Salary)";
$description = "Write a Java program to achieve Multiple Inheritance using Interface (Gross, Employee, Salary).";
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
          <div class="bread-title"><h2>Java Program to Achieve Multiple Inheritance Using Interface (Gross, Employee, Salary)</h2></div>
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
				<h2 class="blog-title">Java Program to Achieve Multiple Inheritance Using Interface (Gross, Employee, Salary)</h2>
				<p>Write a Java program to achieve Multiple Inheritance using Interface (Gross, Employee, Salary).</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*; // import language package

interface Gross // interface declaration
{
	double ta=800.0;
	double da=1500.0; // final variable
	void gross_sal();
}

class Employee // super class declaration
{
	String name; // data member declaration
	float basic_sal;
	
	Employee(String n, float b) // super class constructor
	{
		name=n;
		basic_sal=b;
	}
	
	void display() // method to display value of data member
	{
		System.out.println("Name of Employee : "+name);
		System.out.println("Basic Salary of Employee : "+basic_sal);
	}
}

class Salary extends Employee implements Gross // sub class constructor
{
	float hra;

	Salary(String n, float b, float h) // sub class constructor
	{
		super(n,b);
		hra=h;
	}
	
	void disp()
	{
		display();
		System.out.println("HRA of Employee : "+hra);
	}
	
	public void gross_sal() // method to calculate gross salary
	{
		double gross_sal=basic_sal + ta + da + hra;
		System.out.println("TA of Employee : "+ta);
		System.out.println("DA of Employee : "+da);
		System.out.println("Gross Salary of Employee : "+gross_sal);
	}
}

public class EmpDetails {

	public static void main(String args[]) // main method
	{
		Salary s = new Salary("Sachin",8000,3000); // initiating Sub class
		s.disp();	// invoke method of sub class
		s.gross_sal();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Name of Employee : Sachin
Basic Salary of Employee : 8000.0
HRA of Employee : 3000.0
TA of Employee : 800.0
DA of Employee : 1500.0
Gross Salary of Employee : 13300.0
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