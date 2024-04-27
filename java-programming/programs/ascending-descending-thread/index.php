<?php 
require("../../../libs/config.php");
$title = "Java Program to Create Two Threads to display number in Ascending and Descending order";
$description = "Write a Java program to create two threads so one thread will print numbers from ascending number where as second thread will print descending no. between 1 to 15 numbers.";
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
          <div class="bread-title"><h2>Java Program to Create Two Threads to display number in Ascending and Descending order</h2></div>
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
				<h2 class="blog-title">Java Program to Create Two Threads to display number in Ascending and Descending order</h2>
				<p>Write a Java program to create two threads so one thread will print numbers from ascending number where as second thread will print descending no. between 1 to 15 numbers.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class Ascending extends Thread {
	
	public void run() {
	
		for(int i=1; i&lt;=15;i++) {
			System.out.println("Ascending Thread : " + i);
		}
	}
}

class Descending extends Thread {
	
	public void run() {
		
		for(int i=15; i&gt;0;i--) {
			System.out.println("Descending Thread : " + i);
		}
	}
}

public class AscendingDescendingThread {

	public static void main(String[] args) {
		
		new Ascending().start();
		new Descending().start();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Ascending Thread : 1
Ascending Thread : 2
Ascending Thread : 3
Ascending Thread : 4
Ascending Thread : 5
Ascending Thread : 6
Ascending Thread : 7
Ascending Thread : 8
Ascending Thread : 9
Ascending Thread : 10
Ascending Thread : 11
Ascending Thread : 12
Ascending Thread : 13
Ascending Thread : 14
Ascending Thread : 15
Descending Thread : 15
Descending Thread : 14
Descending Thread : 13
Descending Thread : 12
Descending Thread : 11
Descending Thread : 10
Descending Thread : 9
Descending Thread : 8
Descending Thread : 7
Descending Thread : 6
Descending Thread : 5
Descending Thread : 4
Descending Thread : 3
Descending Thread : 2
Descending Thread : 1
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