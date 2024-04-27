<?php 
require("../../../libs/config.php");
$title = "Java Program to create two threads one for Prime number and other for Non-prime number";
$description = "Write a Java program to create two threads one for prime number and other for non-prime number.";
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
          <div class="bread-title"><h2>Java Program to create two threads one for Prime number and other for Non-prime number</h2></div>
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
				<h2 class="blog-title">Java Program to create two threads one for Prime number and other for Non-prime number</h2>
				<p>Write a Java program to create two threads one for prime number and other for non-prime number.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class Prime extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=10; i++) {
			if(i==2 || i==3 || i==5 || i==7)
				System.out.println("Prime no. : " + i);
		}
	}
}

class NonPrime extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=10; i++) {
			if(i==4 || i==6 || i==8 || i==9 || i==10)
				System.out.println("Non-Prime no. : " + i);
		}
	}
}

public class PrimeNotPrimeThread {

	public static void main(String[] args) {
		
		new Prime().start();
		new NonPrime().start();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Prime no. : 2
Prime no. : 3
Prime no. : 5
Prime no. : 7
Non-Prime no. : 4
Non-Prime no. : 6
Non-Prime no. : 8
Non-Prime no. : 9
Non-Prime no. : 10
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