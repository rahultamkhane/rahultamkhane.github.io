<?php 
require("../../../libs/config.php");
$title = "Java Program with multiple threads performing concurrent operations";
$description = "Write a Write a Java program with multiple threads performing concurrent operations..";
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
          <div class="bread-title"><h2>Java Program with multiple threads performing concurrent operations</h2></div>
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
				<h2 class="blog-title">Java Program with multiple threads performing concurrent operations</h2>
				<p>Write a Write a Java program with multiple threads performing concurrent operations..</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class MathSin extends Thread {
	public double deg;
	public double res;
	public MathSin(int degree) {
		deg = degree;
	}
	public void run() {
		System.out.println("Executing sin of "+deg);
		double Deg2Rad = Math.toRadians(deg);
		res = Math.sin(Deg2Rad);
		System.out.println("Exit from MathSin. Res = "+res);
	}
}

class MathCos extends Thread {
	public double deg;
	public double res;
	public MathCos(int degree) {
		deg = degree;
	}
	public void run() {
		System.out.println("Executing cos of "+deg);
		double Deg2Rad = Math.toRadians(deg);
		res = Math.cos(Deg2Rad);
		System.out.println("Exit from MathCos. Res = "+res);
	}
}

class MathTan extends Thread {
	public double deg;
	public double res;
	public MathTan(int degree) {
		deg = degree;
	}
	public void run() {
		System.out.println("Executing tan of "+deg);
		double Deg2Rad = Math.toRadians(deg);
		res = Math.tan(Deg2Rad);
		System.out.println("Exit from MathTan. Res = "+res);
	}
}
public class MathThreads {

	public static void main(String[] args) {
		
		MathSin st = new MathSin(45);
		MathCos ct = new MathCos(60);
		MathTan tt = new MathTan(30);
		st.start();
		ct.start();
		tt.start();
		try { // wait for completion of all thread and then sum
			st.join();
			ct.join(); //wait for completion of MathCos object
			tt.join();
			double z = st.res + ct.res + tt.res;
			System.out.println("Sum of sin, cos, tan = "+z);
		}
		catch (InterruptedException IntExp) { }
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Executing tan of 30.0
Executing sin of 45.0
Executing cos of 60.0
Exit from MathSin. Res = 0.7071067811865475
Exit from MathTan. Res = 0.5773502691896257
Exit from MathCos. Res = 0.5000000000000001
Sum of sin, cos, tan = 1.7844570503761732
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