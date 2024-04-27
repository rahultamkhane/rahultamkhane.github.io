<?php 
require("../../../libs/config.php");
$title = "Java Program to Calculate Fraction of Given Numbers";
$description = "Write a Java program to define a class <mark>Fraction </mark>having data members numerator and denominator.  Initialize three objects using different constructors and display its fractional value..";
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
          <div class="bread-title"><h2>Java Program to Calculate Fraction of Given Numbers</h2></div>
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
				<h2 class="blog-title">Java Program to Calculate Fraction of Given Numbers</h2>
				<p>Write a Java program to define a class <mark>Fraction </mark>having data members numerator and denominator.  Initialize three objects using different constructors and display its fractional value..</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">public class Fraction {

	double numerator,denominator,fraction;
	
	Fraction (int a, double b) {
		
		numerator=a;
		denominator=b;
		fraction=numerator/denominator;
		System.out.println ("Fraction1 = "+fraction);
	}
	
	Fraction (int x, int y) {
		
		numerator=x;
		denominator=y;
		fraction=numerator/denominator;
		System.out.println ("Fraction2 = "+fraction);
	}
	
	Fraction(double m, double n) {
		
		numerator=m;
		denominator=n;
		fraction=numerator/denominator;
		System.out.println ("Fraction3 = "+fraction);
	}
	
	public static void main(String[] args) {
		
		Fraction f = new Fraction(12,12.3);
		Fraction f2 = new Fraction(10,12);
		Fraction f3 = new Fraction(10.5,13.5);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Fraction1 = 0.975609756097561
Fraction2 = 0.8333333333333334
Fraction3 = 0.7777777777777778
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