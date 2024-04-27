<?php 
require("../../../libs/config.php");
$title = "Java Program to use Array of Objects ";
$description = "Write a Java program for array of objects. Define a class 'employee' with data members as empid, name and salary. accept data for 5 objects using array of objects and print it.";
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
          <div class="bread-title"><h2>Java Program to use Array of Objects </h2></div>
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
				<h2 class="blog-title">Java Program to use Array of Objects </h2>
				<p>Write a Java program for array of objects. Define a class 'employee' with data members as empid, name and salary. accept data for 5 objects using array of objects and print it.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Scanner;

public class Employee {

	int empid;
	String name;
	float salary;
	
	public void getInput() {
	
		Scanner in = new Scanner(System.in);
		System.out.print("Enter the empid :: ");
		empid = in.nextInt();
		System.out.print("Enter the name :: ");
		name = in.next();
		System.out.print("Enter the salary :: ");
		salary = in.nextFloat();
	}
	
	public void display() {
		
		System.out.println("Employee id = " + empid);
		System.out.println("Employee name = " + name);
		System.out.println("Employee salary = " + salary);
	}
	
	public static void main(String[] args) {
	
		Employee e[] = new Employee[5];
		
		for(int i=0; i&lt;5; i++) {
			
			e[i] = new Employee();
			e[i].getInput();
		}
		
		System.out.println("**** Data Entered as below ****");
		
		for(int i=0; i&lt;5; i++) {
			
			e[i].display();
		}
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the empid :: 101
Enter the name :: Smith
Enter the salary :: 30250.0
Enter the empid :: 103
Enter the name :: Harsh
Enter the salary :: 23560.0
Enter the empid :: 105
Enter the name :: Subhash
Enter the salary :: 19823.0
Enter the empid :: 203
Enter the name :: Rohan
Enter the salary :: 25230.0
Enter the empid :: 201
Enter the name :: Girish
Enter the salary :: 32000.0
**** Data Entered as below ****
Employee id = 101
Employee name = Smith
Employee salary = 30250.0
Employee id = 103
Employee name = Harsh
Employee salary = 23560.0
Employee id = 105
Employee name = Subhash
Employee salary = 19823.0
Employee id = 203
Employee name = Rohan
Employee salary = 25230.0
Employee id = 201
Employee name = Girish
Employee salary = 32000.0
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