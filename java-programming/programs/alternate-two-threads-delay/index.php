<?php 
require("../../../libs/config.php");
$title = "Java Program to create two threads which will display numbers from 1 to 10 with delay of 1 second";
$description = "Write a Java program to create two threads, which alternately displays numbers from 1 to 10. Each thread sleeps for 1 second before displaying next number.";
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
          <div class="bread-title"><h2>Java Program to create two threads which will display numbers from 1 to 10 with delay of 1 second</h2></div>
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
				<h2 class="blog-title">Java Program to create two threads which will display numbers from 1 to 10 with delay of 1 second</h2>
				<p>Write a Java program to create two threads, which alternately displays numbers from 1 to 10. Each thread sleeps for 1 second before displaying next number.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class One extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=10; i++) {
			System.out.println("One : "+i);
			
			try {
				Thread.sleep(1000);
			}
			catch (InterruptedException ie) { }
		}
	}
}

class Two extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=10; i++) {
			System.out.println("Two : "+i);
			
			try {
				Thread.sleep(1000);
			}
			catch (InterruptedException ie) { }
		}
	}
}

public class AlternateTwoThreads {

	public static void main(String[] args) {
		
		One t1 = new One();
		Two t2 = new Two();
		t1.start();
		t2.start();
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">One : 1
Two : 1
Two : 2
One : 2
One : 3
Two : 3
One : 4
Two : 4
One : 5
Two : 5
One : 6
Two : 6
One : 7
Two : 7
One : 8
Two : 8
One : 9
Two : 9
One : 10
Two : 10
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