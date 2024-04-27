<?php 
require("../../../libs/config.php");
$title = "Java Program to Demonstrate Type Casting";
$description = "Write a Java program to demonstrate type casting.";
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
          <div class="bread-title"><h2>Java Program to Demonstrate Type Casting</h2></div>
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
				<h2 class="blog-title">Java Program to Demonstrate Type Casting</h2>
				<p>Write a Java program to demonstrate type casting.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class TypeCasting {

	public static void main(String[] args) {
		
		byte b;
		int val = 263;
		double d = 9563.25;
		long l = 56322145;
		System.out.println("int val = "+val);
		System.out.println("double d = "+d);
		System.out.println("long l = "+l);
		System.out.println("\nint to byte ");
		b = (byte) val;
		System.out.println(val+" to "+b);
		System.out.println("\ndouble to int ");
		System.out.println(d+" to "+(int)d);
		System.out.println("\nlong to double ");
		System.out.println(l+" to "+(double)l);
		System.out.println("\nlong to short ");
		System.out.println(l+" to "+(short)l);
		System.out.println("\ndouble to byte ");
		System.out.println(d+" to "+(byte)d);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac TypeCasting.java
C:\>java TypeCasting
int val = 263
double d = 9563.25
long l = 56322145

int to byte 
263 to 7

double to int 
9563.25 to 9563

long to double 
56322145 to 5.6322145E7

long to short 
56322145 to 26721

double to byte 
9563.25 to 91
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