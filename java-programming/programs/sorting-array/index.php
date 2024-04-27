<?php 
require("../../../libs/config.php");
$title = "Java Program for Sorting (Bubble Sort)";
$description = "Write a Java program to sort given array in ascending order using <mark>Bubble Sort</mark> method.";
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
          <div class="bread-title"><h2>Java Program for Sorting (Bubble Sort)</h2></div>
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
				<h2 class="blog-title">Java Program for Sorting (Bubble Sort)</h2>
				<p>Write a Java program to sort given array in ascending order using <mark>Bubble Sort</mark> method.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Scanner;

class Sorting {

	static int arr[] = new int[10];
	
	public static void main(String[] args) {
		
		int temp;
		Scanner s = new Scanner(System.in);
		
		System.out.println("Enter 10 elements...");
		
		for(int i=0; i&lt;10; i++) {
			
			arr[i] = s.nextInt();
		}
		
		System.out.println("Before sorting elements are..");
		displayElements();
		
		for(int i=0;i&lt;10-1;i++) {   //	Loop for passes
			
			for(int j=0;j&lt;(10-i-1);j++) {  //	Loop to sort element
			
				if(arr[j] &gt; arr[j+1]) { //	Checking for less element
				
					/*	Exchange greater element with smaller element */
					temp = arr[j];
					arr[j] = arr[j+1];
					arr[j+1] = temp;
				}
			}
		}

		
		System.out.println("\n\nAfter sorting elements are..");
		displayElements();
	}

	private static void displayElements() {
		
		for(int a : arr) { // for-each loop
			
			System.out.print(a + " ");
		}
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 10 elements...
12
56
23
45
85
64
51
47
11
95
Before sorting elements are..
12 56 23 45 85 64 51 47 11 95 

After sorting elements are..
11 12 23 45 47 51 56 64 85 95 
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