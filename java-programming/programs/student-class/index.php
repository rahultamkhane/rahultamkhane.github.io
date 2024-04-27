<?php 
require("../../../libs/config.php");
$title = "Java Program to Calculate Percentage Score of Student";
$description = "Write a Java program to define a class <mark>Student </mark>with four data members such as name, roll no., sub1, and sub2. Define appropriate methods to initialize and display the values of data members. Also calculate total  marks and percentage scored by student.";
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
          <div class="bread-title"><h2>Java Program to Calculate Percentage Score of Student</h2></div>
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
				<h2 class="blog-title">Java Program to Calculate Percentage Score of Student</h2>
				<p>Write a Java program to define a class <mark>Student </mark>with four data members such as name, roll no., sub1, and sub2. Define appropriate methods to initialize and display the values of data members. Also calculate total  marks and percentage scored by student.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;
import java.io.*;

class Student {
	
	String name;
	int roll_no;
	int sub1,sub2;
	int total;
	float per;
	
	void getdata() throws IOException {
		
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println ("Enter Name of Student");
		name = br.readLine();
		
		System.out.println ("Enter Roll No. of Student");
		roll_no = Integer.parseInt(br.readLine());
		
		System.out.println ("Enter marks out of 100 of 1st subject");
		sub1 = Integer.parseInt(br.readLine());
		
		System.out.println ("Enter marks out of 100 of 2nd subject");
		sub2 = Integer.parseInt(br.readLine());
	}

	void show() {
		
		total=sub1+sub2;
		per=(total*100)/200;
		System.out.println ("Roll No. = "+roll_no);
		System.out.println ("Name = "+name);
		System.out.println ("Marks of 1st Subject = "+sub1);
		System.out.println ("Marks of 2nd Subject = "+sub2);
		System.out.println ("Total Marks = "+total);
		System.out.println ("Percentage = "+per+"%");
	}
}

public class StudentDemo {

	public static void main(String[] args) throws IOException {
		
		Student s=new Student();
		s.getdata();
		s.show();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter Name of Student
Subhash Patel
Enter Roll No. of Student
13
Enter marks out of 100 of 1st subject
56
Enter marks out of 100 of 2nd subject
78
Roll No. = 13
Name = Subhash Patel
Marks of 1st Subject = 56
Marks of 2nd Subject = 78
Total Marks = 134
Percentage = 67.0%
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