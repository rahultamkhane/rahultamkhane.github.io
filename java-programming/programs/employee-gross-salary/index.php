<?php 
require("../../../libs/config.php");
$title = "Java Program to Calculate Gross Salary of an Employee";
$description = "Write a Java program to define a class employee to accept emp_id, emp _name, basic_salary from the user and display the gross_salary.";
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
          <div class="bread-title"><h2>Java Program to Calculate Gross Salary of an Employee</h2></div>
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
				<h2 class="blog-title">Java Program to Calculate Gross Salary of an Employee</h2>
				<p>Write a Java program to define a class employee to accept emp_id, emp _name, basic_salary from the user and display the gross_salary.</p>
				
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

public class Employee {

	int emp_id;
	String emp_name;
	float basic_salary;
	
	Employee(int id, String name, float sal) {
		emp_id=id;
		emp_name=name;
		basic_salary=sal;
	}
	
	void display() {
		
		float da=basic_salary*15/100;
		float hra=basic_salary*10/100;
		float gross_sal=basic_salary+da+hra;
		System.out.println ("Employee Id= "+emp_id);
		System.out.println ("Emplyee Name= "+emp_name);
		System.out.println ("Gross Salary= "+gross_sal);
	}
	
	public static void main(String[] args) throws IOException {
		
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println ("Enter Employee id");
		int id = Integer.parseInt(br.readLine());
		
		System.out.println ("Enter Employee Name");
		String name = br.readLine();
		
		System.out.println ("Enter Basic Salary");
		Float sal = Float.parseFloat(br.readLine());
		
		Employee e = new Employee(id, name, sal);
		e.display();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter Employee id
123
Enter Employee Name
Sharad
Enter Basic Salary
15000
Employee Id= 123
Emplyee Name= Sharad
Gross Salary= 18750.0
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