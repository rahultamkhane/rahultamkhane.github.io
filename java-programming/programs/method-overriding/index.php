<?php 
require("../../../libs/config.php");
$title = "Java Program to Implement Hierarchical Inheritance (Shape -> Rectangle & Triangle)";
$description = "Write a Java program to implement hierarchical inheritance (Shape -> Rectangle & Triangle)<br><br>
Write a Java program to implement method overriding for following inheritance : (assume suitable data )<br><br>

abstract class : Shape<br>
dim1, dim2, disp( )<br>
abstract area ( )<br><br>

class: Rectangle<br>
getd( ), area ( )<br><br>

class: Triangle<br>
getd( ), area ( )";
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
          <div class="bread-title"><h2>Java Program to Implement Hierarchical Inheritance (Shape -> Rectangle & Triangle)</h2></div>
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
				<h2 class="blog-title">Java Program to Implement Hierarchical Inheritance (Shape -> Rectangle & Triangle)</h2>
				<p>Write a Java program to implement hierarchical inheritance (Shape -> Rectangle & Triangle)<br><br>
Write a Java program to implement method overriding for following inheritance : (assume suitable data )<br><br>

abstract class : Shape<br>
dim1, dim2, disp( )<br>
abstract area ( )<br><br>

class: Rectangle<br>
getd( ), area ( )<br><br>

class: Triangle<br>
getd( ), area ( )</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;
import java.io.*;

abstract class Shape {
	
	int dim1,dim2;
	
	void getd()throws IOException {
		BufferedReader br = new BufferedReader (new InputStreamReader(System.in));
		System.out.println ("Enter Value of 1st Dimension");
		dim1=Integer.parseInt(br.readLine());
		System.out.println ("Enter Value of 2nd Dimension");
		dim2=Integer.parseInt(br.readLine());
	}
	abstract void area();
}

class Rectangle extends Shape {
	
	void getd() throws IOException {
		
		super.getd();
	}
	
	void area() {
		
		int a=dim1*dim2;
		System.out.println ("Area of Rectangle = "+a);
	}
}

class Triangle extends Shape
{
	void getd() throws IOException {
		
		super.getd();
	}
	
	void area() {
		
		double b=(1*dim1*dim2)/2;
		System.out.println ("Area of Triangle = "+b);
	}
}

public class MethodOverriding {

	public static void main(String[] args) throws IOException {
	
		Rectangle R = new Rectangle();
		R.getd();
		R.area();
		
		Triangle T = new Triangle();
		T.getd();
		T.area();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter Value of 1st Dimension
42
Enter Value of 2nd Dimension
12
Area of Rectangle = 504
Enter Value of 1st Dimension
23
Enter Value of 2nd Dimension
52
Area of Triangle = 598.0
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