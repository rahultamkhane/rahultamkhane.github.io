<?php 
require("../../../libs/config.php");
$title = "Java Program for extending Thread class";
$description = "Write a Java program for extending thread class.";
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
          <div class="bread-title"><h2>Java Program for extending Thread class</h2></div>
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
				<h2 class="blog-title">Java Program for extending Thread class</h2>
				<p>Write a Java program for extending thread class.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">public class ExtendThreadDemo extends Thread {

	public void run() {
		
		for(int i=1;i&lt;=2;i++) {
			System.out.println("Thread Name : "+Thread.currentThread());
			System.out.println("Value of I = "+i);
			try {
				Thread.sleep(1);
			}
			catch (Exception ee){ }
		}
	}
	
	public static void main(String[] args) {
		
		System.out.println("In Main");
		ExtendThreadDemo t1=new ExtendThreadDemo();
		ExtendThreadDemo t2=new ExtendThreadDemo();
		t1.start();
		t2.start();
		System.out.println("Main Ends");
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">In Main
Main Ends
Thread Name : Thread[Thread-0,5,main]
Value of I = 1
Thread Name : Thread[Thread-1,5,main]
Value of I = 1
Thread Name : Thread[Thread-0,5,main]
Value of I = 2
Thread Name : Thread[Thread-1,5,main]
Value of I = 2
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