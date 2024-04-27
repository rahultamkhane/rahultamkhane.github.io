<?php 
require("../../../libs/config.php");
$title = "Java Program for creating three threads";
$description = "Write a Java program for creating three threads.";
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
          <div class="bread-title"><h2>Java Program for creating three threads</h2></div>
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
				<h2 class="blog-title">Java Program for creating three threads</h2>
				<p>Write a Java program for creating three threads.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class X extends Thread {
	
	public void run() 	{
		
		for(int i=1;i&lt;=3;i++) {
			System.out.println("From Thread X : "+i);
		}
		System.out.println("Exit Thread X");
	}
}

class Y extends Thread {
	
	public void run() {
		
		for(int i=1;i&lt;=3;i++) {
			System.out.println("From Thread Y : "+i);
		}
		System.out.println("Exit Thread Y");
	}
}

class Z extends Thread {
	
	public void run() 	{
		
		for(int i=1;i&lt;=3;i++) {
			System.out.println("From Thread Z : "+i);
		}
		System.out.println("Exit Thread Z");
	}
}

public class ThreeThreads {

	public static void main(String[] args) {
	
		new X().start();
		new Y().start();
		new Z().start();
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">From Thread X : 1
From Thread X : 2
From Thread X : 3
Exit Thread X
From Thread Y : 1
From Thread Y : 2
From Thread Y : 3
Exit Thread Y
From Thread Z : 1
From Thread Z : 2
From Thread Z : 3
Exit Thread Z
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