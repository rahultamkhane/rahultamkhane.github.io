<?php 
require("../../../libs/config.php");
$title = "Java Program to Implement Multiple Inheritance (Student -> Exam -> Result)";
$description = "Write a Java program to implement multiple inheritance (student -> exam -> result)<br><br>
Write a Java program to implement the following multiple inheritance:<br><br>
class student<br>
  name, roll_no<br>
  mark 1, mark2<br><br>

interface: exam<br>
  percent_cal( )<br><br>

class: result <br>
  display( )";
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
          <div class="bread-title"><h2>Java Program to Implement Multiple Inheritance (Student -> Exam -> Result)</h2></div>
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
				<h2 class="blog-title">Java Program to Implement Multiple Inheritance (Student -> Exam -> Result)</h2>
				<p>Write a Java program to implement multiple inheritance (student -> exam -> result)<br><br>
Write a Java program to implement the following multiple inheritance:<br><br>
class student<br>
  name, roll_no<br>
  mark 1, mark2<br><br>

interface: exam<br>
  percent_cal( )<br><br>

class: result <br>
  display( )</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;
import java.io.*;

interface Exam {
	
	void percent_cal();
}

class Student {
	String name;
	int roll_no,mark1,mark2;
	
	Student(String n, int r, int m1, int m2) {
		
		name=n;
		roll_no=r;
		mark1=m1;
		mark2=m2;
	}
	
	void display() {
		
		System.out.println ("Name of Student: "+name);
		System.out.println ("Roll No. of Student: "+roll_no);
		System.out.println ("Marks of Subject 1: "+mark1);
		System.out.println ("Marks of Subject 2: "+mark2);
	}
}

class Result extends Student implements Exam {
	
	Result(String n, int r, int m1, int m2) {
		
		super(n,r,m1,m2);
	}
	
	public void percent_cal() {
		
		int total=(mark1+mark2);
		float percent=total*100/200;
		System.out.println ("Percentage: "+percent+"%");
	}
	
	void display() {
		
		super.display();
	}
}

public class MultipleInh {

	public static void main(String[] args) {
		
		Result R = new Result("Ragini",12,93,84);
		R.display();
		R.percent_cal();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Name of Student: Ragini
Roll No. of Student: 12
Marks of Subject 1: 93
Marks of Subject 2: 84
Percentage: 88.0%
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