<?php 
require("../../../libs/config.php");
$title = "Java Program Menu Driven Program to Check Even, Odd, Positive, Negative Number";
$description = "Write a Java program to create menu driven program to check even, odd, positive, negative number.";
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
          <div class="bread-title"><h2>Java Program Menu Driven Program to Check Even, Odd, Positive, Negative Number</h2></div>
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
				<h2 class="blog-title">Java Program Menu Driven Program to Check Even, Odd, Positive, Negative Number</h2>
				<p>Write a Java program to create menu driven program to check even, odd, positive, negative number.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.util.Scanner;

public class MenuDrivenProg {

	public static void main(String[] args) {
		
		int choice, num;
		Scanner n = new Scanner(System.in);
		System.out.println("Menu....");
		System.out.println("1. Find positive");
		System.out.println("2. Odd/Even");
		System.out.println("Enter the choice : ");
		choice = n.nextInt();
	
		switch(choice) {
		
			case 1:
				System.out.println("Enter number : ");
				num = n.nextInt();
				if(num &gt; 0)
					System.out.println("Positive...");
				else
					System.out.println("Negative...");
				break;
			case 2:
				System.out.println("Enter number : ");
				num = n.nextInt();
				if(num%2 == 0)
					System.out.println("Even...");
				else
					System.out.println("Odd...");
				break;
			default:
				System.out.println("Wrong choice..");
		}
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac MenuDrivenProg.java
C:\>java MenuDrivenProg
Menu....
1. Find positive
2. Odd/Even
Enter the choice :
1
Enter number :
-20
Negative...


Menu....
1. Find positive
2. Odd/Even
Enter the choice :
2
Enter number :
63
Odd...
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