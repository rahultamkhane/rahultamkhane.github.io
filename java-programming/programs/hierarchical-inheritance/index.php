<?php 
require("../../../libs/config.php");
$title = "Java Program for Hierarchical Inheritance";
$description = "Write a Java program for hierachical inheritance.
Write a Java program to the following hierachical inheritance.
                         _______________________
                          | abstract class shape|
                          |_____________________|
                          |   abstract area( )        |
                          |_____________________|
                       ___________|________________
                       |						    |
____________|______________    ___________|__________
|      class rectangle               |   |       class triagle          | 
|__________________________|   |_____________________|
|  length, breadth, area( )    |   |   side1, side2, area( )   |
|__________________________|   |_____________________|.";
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
          <div class="bread-title"><h2>Java Program for Hierarchical Inheritance</h2></div>
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
				<h2 class="blog-title">Java Program for Hierarchical Inheritance</h2>
				<p>Write a Java program for hierachical inheritance.
Write a Java program to the following hierachical inheritance.
                         _______________________
                          | abstract class shape|
                          |_____________________|
                          |   abstract area( )        |
                          |_____________________|
                       ___________|________________
                       |						    |
____________|______________    ___________|__________
|      class rectangle               |   |       class triagle          | 
|__________________________|   |_____________________|
|  length, breadth, area( )    |   |   side1, side2, area( )   |
|__________________________|   |_____________________|.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">abstract class Shape2 {
	
	abstract void area();   
}

class Rectangle2 extends Shape2 {
	
	int length, breadth;
		Rectangle2(int l, int b) {
		
		length = l;
		breadth = b;
	}
	
	public void area() {
		
		System.out.println("Area of Rectangle : "+ (length * breadth));
	}
}

class Triangle2 extends Shape2 {
	
	int side1, side2;
	Triangle2(int s1, int s2) {
		
		side1 = s1;
		side2 = s2;
	}
	
	public void area() {
		
		System.out.println("Area of Triangle : "+(0.5 * side1 * side2));
	}
}

public class HierarchicalInh {

	public static void main(String[] args) {
		
		Rectangle2 r = new Rectangle2(23,19);
		Triangle2 t = new Triangle2(15,6);
		Shape2 s = r;
		s.area();
		s = t;
		s.area();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Area of Rectangle : 437
Area of Triangle : 45.0
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