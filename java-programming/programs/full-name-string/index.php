<?php 
require("../../../libs/config.php");
$title = "Java Program to Display Full Name of user";
$description = "Write a Java program to accept first name, middle name and surname in three different strings and then concatenate the three strings to make full name.";
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
          <div class="bread-title"><h2>Java Program to Display Full Name of user</h2></div>
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
				<h2 class="blog-title">Java Program to Display Full Name of user</h2>
				<p>Write a Java program to accept first name, middle name and surname in three different strings and then concatenate the three strings to make full name.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Scanner;

public class FullNameString {

	public static void main(String[] args) {

		Scanner input = new Scanner(System.in);
		
		System.out.print("Enter first name :: ");
		String firstName = input.nextLine();
		
		System.out.print("Enter middle name :: ");
		String middleName = input.nextLine();
		
		System.out.print("Enter surname :: ");
		String lastName = input.nextLine();
		
		// Here StringBuffer is used to combine 3 strings into single
		StringBuffer fullName = new StringBuffer();
		fullName.append(firstName);
		fullName.append(" ");   // For space between names
		fullName.append(middleName);
		fullName.append(" ");   // For space between names
		fullName.append(lastName);
		System.out.println("Hello, " + fullName);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter first name :: Rahul
Enter middle name :: S.
Enter surname :: Tamkhane
Hello, Rahul S. Tamkhane
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