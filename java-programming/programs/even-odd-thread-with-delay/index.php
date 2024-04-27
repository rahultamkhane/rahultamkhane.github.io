<?php 
require("../../../libs/config.php");
$title = "Java Program to Create a Thread to Print all Even nos. from 1 to 50 with 100 ms delay";
$description = "Write a Java program to create a thread to print all even nos. from 1 to 50 with delay to 100 ms after each number.";
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
          <div class="bread-title"><h2>Java Program to Create a Thread to Print all Even nos. from 1 to 50 with 100 ms delay</h2></div>
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
				<h2 class="blog-title">Java Program to Create a Thread to Print all Even nos. from 1 to 50 with 100 ms delay</h2>
				<p>Write a Java program to create a thread to print all even nos. from 1 to 50 with delay to 100 ms after each number.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class EvenNum1To50 extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=50; i++) {
			if(i%2 == 0)
				System.out.println("Even Thread: "+i);
			try {
				Thread.sleep(100);
			}
			catch (InterruptedException e) { }
		}
	}
}

public class EvenOddThreadWithDelay {

	public static void main(String[] args) {
	
		new EvenNum1To50().start();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Even Thread: 2
Even Thread: 4
Even Thread: 6
Even Thread: 8
Even Thread: 10
Even Thread: 12
Even Thread: 14
Even Thread: 16
Even Thread: 18
Even Thread: 20
Even Thread: 22
Even Thread: 24
Even Thread: 26
Even Thread: 28
Even Thread: 30
Even Thread: 32
Even Thread: 34
Even Thread: 36
Even Thread: 38
Even Thread: 40
Even Thread: 42
Even Thread: 44
Even Thread: 46
Even Thread: 48
Even Thread: 50
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