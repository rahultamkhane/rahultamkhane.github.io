<?php 
require("../../../libs/config.php");
$title = "Java Program to Achieve Multiple Inheritance Using Interface (Exam, Student, Result)";
$description = "Write a Java program to achieve multiple inheritance using Interface (Exam, Student, Result).";
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
          <div class="bread-title"><h2>Java Program to Achieve Multiple Inheritance Using Interface (Exam, Student, Result)</h2></div>
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
				<h2 class="blog-title">Java Program to Achieve Multiple Inheritance Using Interface (Exam, Student, Result)</h2>
				<p>Write a Java program to achieve multiple inheritance using Interface (Exam, Student, Result).</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">interface Exam {
	
	void Percent_cal();
}

class Student {
	
	String name;
	int roll_no, Marks1, Marks2;
	Student(String n, int rn, int m1, int m2) {
		
		name = n;
		roll_no = rn;
		Marks1 = m1;
		Marks2 = m2;
	}
	
	void show()	{
		
		System.out.println("Student Name : "+name);
		System.out.println("Roll no : "+roll_no);
		System.out.println("Marks1 : "+Marks1);
		System.out.println("Marks2 : "+Marks2);
	}
}

class Result extends Student implements Exam {
	
	float per;
	Result(String n,int rn,int m1,int m2) {
		
		super(n,rn,m1,m2);
	}
	
	public void Percent_cal() {
		
		int tot = Marks1 + Marks2;
		per = (float)tot / 2;
	}
	
	void display() {
		
		show();
		System.out.println("Percentage = "+per);
	}	
	
}

public class StudentDetails {
	
	public static void main (String[] args) {
		
		Result r = new Result("Aashish",11,75,95);
		r.Percent_cal();
		r.display();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Student Name : Aashish
Roll no : 11
Marks1 : 75
Marks2 : 95
Percentage = 85.0
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