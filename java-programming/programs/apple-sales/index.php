<?php 
require("../../../libs/config.php");
$title = "Java Program to Store Details of AppleSales in Array and Display Average Sale";
$description = "Write a Java program to store details of AppleSales in array and display average sale.";
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
          <div class="bread-title"><h2>Java Program to Store Details of AppleSales in Array and Display Average Sale</h2></div>
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
				<h2 class="blog-title">Java Program to Store Details of AppleSales in Array and Display Average Sale</h2>
				<p>Write a Java program to store details of AppleSales in array and display average sale.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AppleSales {

	public static void main(String[] args) throws IOException {
		
		double avg;
		float sum = 0;
		float sales[] = new float[7];
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		
		for(int i = 1; i &lt;= 7; i++) {
			System.out.println ("Enter sales for day" + i + " of week =");
			sales[i-1] = Float.parseFloat(br.readLine());
			sum = sum + sales[i-1];
		}
		
		System.out.println ("Sum = " + sum);
		avg = sum / 7;
		System.out.println ("Average sale of week=" + avg);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter sales for day1 of week =
120.6
Enter sales for day2 of week =
142.5
Enter sales for day3 of week =
452.4
Enter sales for day4 of week =
500.0
Enter sales for day5 of week =
532.0
Enter sales for day6 of week =
745.2
Enter sales for day7 of week =
320.9
Sum = 2813.5999
Average sale of week=401.9428405761719
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