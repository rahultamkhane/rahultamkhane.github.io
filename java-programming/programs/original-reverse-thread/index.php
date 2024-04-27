<?php 
require("../../../libs/config.php");
$title = "Java Program to Create Two Threads one will print numbers in original order and other in reverse order from 1 to 50";
$description = "Write a Java program to create two threads one will print numbers in original order and other in reverse order from 1 to 50.";
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
          <div class="bread-title"><h2>Java Program to Create Two Threads one will print numbers in original order and other in reverse order from 1 to 50</h2></div>
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
				<h2 class="blog-title">Java Program to Create Two Threads one will print numbers in original order and other in reverse order from 1 to 50</h2>
				<p>Write a Java program to create two threads one will print numbers in original order and other in reverse order from 1 to 50.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">class Original extends Thread {
	
	public void run() {
		
		for(int i=1; i&lt;=50; i++) {
			System.out.println("Original Order Thread : " + i);
		}
	}
}

class Reverse extends Thread {
	
	public void run() {
		
		for(int i=50; i&gt;0; i--) {
			System.out.println("Reverse Order Thread : " + i);
		}
	}
}

public class OriginalReverseThread {

	public static void main(String[] args) {
		
		new Original().start();
		new Reverse().start();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Original Order Thread : 1
Original Order Thread : 2
Original Order Thread : 3
Original Order Thread : 4
Original Order Thread : 5
Original Order Thread : 6
Original Order Thread : 7
Original Order Thread : 8
Original Order Thread : 9
Original Order Thread : 10
Original Order Thread : 11
Original Order Thread : 12
Original Order Thread : 13
Original Order Thread : 14
Original Order Thread : 15
Original Order Thread : 16
Original Order Thread : 17
Original Order Thread : 18
Original Order Thread : 19
Original Order Thread : 20
Original Order Thread : 21
Original Order Thread : 22
Original Order Thread : 23
Original Order Thread : 24
Original Order Thread : 25
Original Order Thread : 26
Original Order Thread : 27
Original Order Thread : 28
Original Order Thread : 29
Original Order Thread : 30
Original Order Thread : 31
Original Order Thread : 32
Original Order Thread : 33
Original Order Thread : 34
Original Order Thread : 35
Original Order Thread : 36
Original Order Thread : 37
Original Order Thread : 38
Original Order Thread : 39
Original Order Thread : 40
Original Order Thread : 41
Original Order Thread : 42
Original Order Thread : 43
Original Order Thread : 44
Original Order Thread : 45
Original Order Thread : 46
Original Order Thread : 47
Original Order Thread : 48
Original Order Thread : 49
Original Order Thread : 50
Reverse Order Thread : 50
Reverse Order Thread : 49
Reverse Order Thread : 48
Reverse Order Thread : 47
Reverse Order Thread : 46
Reverse Order Thread : 45
Reverse Order Thread : 44
Reverse Order Thread : 43
Reverse Order Thread : 42
Reverse Order Thread : 41
Reverse Order Thread : 40
Reverse Order Thread : 39
Reverse Order Thread : 38
Reverse Order Thread : 37
Reverse Order Thread : 36
Reverse Order Thread : 35
Reverse Order Thread : 34
Reverse Order Thread : 33
Reverse Order Thread : 32
Reverse Order Thread : 31
Reverse Order Thread : 30
Reverse Order Thread : 29
Reverse Order Thread : 28
Reverse Order Thread : 27
Reverse Order Thread : 26
Reverse Order Thread : 25
Reverse Order Thread : 24
Reverse Order Thread : 23
Reverse Order Thread : 22
Reverse Order Thread : 21
Reverse Order Thread : 20
Reverse Order Thread : 19
Reverse Order Thread : 18
Reverse Order Thread : 17
Reverse Order Thread : 16
Reverse Order Thread : 15
Reverse Order Thread : 14
Reverse Order Thread : 13
Reverse Order Thread : 12
Reverse Order Thread : 11
Reverse Order Thread : 10
Reverse Order Thread : 9
Reverse Order Thread : 8
Reverse Order Thread : 7
Reverse Order Thread : 6
Reverse Order Thread : 5
Reverse Order Thread : 4
Reverse Order Thread : 3
Reverse Order Thread : 2
Reverse Order Thread : 1
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