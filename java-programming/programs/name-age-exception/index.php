<?php 
require("../../../libs/config.php");
$title = "Java Program to throw an User-defined exception on invalid age input";
$description = "Write a Java program to input name and age of a person and throw an user-defined exception, if the entered age is negative.";
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
          <div class="bread-title"><h2>Java Program to throw an User-defined exception on invalid age input</h2></div>
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
				<h2 class="blog-title">Java Program to throw an User-defined exception on invalid age input</h2>
				<p>Write a Java program to input name and age of a person and throw an user-defined exception, if the entered age is negative.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Scanner;

class AgeNegativeException extends Exception {
	
	public AgeNegativeException(String msg) {
		
		super(msg);
	}
}

public class NameAgeExcDemo {

	public static void main(String[] args) {

		Scanner s = new Scanner(System.in);
		System.out.print("Enter ur name :: ");
		String name = s.nextLine();
		System.out.print("Enter ur age :: ");
		int age = s.nextInt();
		
		try {
			if(age &lt; 0)
				throw new AgeNegativeException("Age must be greater than 0");
			else
				System.out.println("Valid age !!!");
		}
		catch (AgeNegativeException a) {
			System.out.println("Caught an exception");
			System.out.println(a.getMessage());
		}
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter ur name :: Sachin
Enter ur age :: 19
Valid age !!!

Enter ur name :: Rohan
Enter ur age :: -12
Caught an exception
Age must be greater than 0
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