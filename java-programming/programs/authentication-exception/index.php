<?php 
require("../../../libs/config.php");
$title = "Java Program to throw 'Authentication Failure' exception on wrong password";
$description = "Write a Java program to accept a password from the user and throw 'Authentication Failure'  exception if the password is incorrect.";
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
          <div class="bread-title"><h2>Java Program to throw "Authentication Failure" exception on wrong password</h2></div>
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
				<h2 class="blog-title">Java Program to throw "Authentication Failure" exception on wrong password</h2>
				<p>Write a Java program to accept a password from the user and throw "Authentication Failure"  exception if the password is incorrect.</p>
				
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

class AuthenticationException extends Exception {
	
	public AuthenticationException(String message) {
		
		super(message);
	}
}

public class AuthenticationExcDemo {

	public static void main(String[] args) {

		InputStreamReader isr = new InputStreamReader(System.in);
		BufferedReader br = new BufferedReader(isr);
		String pwd;
		
		try {
			
			System.out.print("Enter password :: ");
			pwd = br.readLine();
			
			if(!pwd.equals("123")) 
				throw new AuthenticationException("Incorrect password\nType correct password");
			else
				System.out.println("Welcome User !!!");
			
		} 
		catch (IOException e) {
			e.printStackTrace();
		} 
		catch (AuthenticationException a) {
			a.printStackTrace();
		}
		System.out.println("BYE BYE");
	}

}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter password :: 123
Welcome User !!!
BYE BYE

Enter password :: abc
exception.AuthenticationException: Incorrect password
Type correct passwordBYE BYE

	at exception.AuthenticationExcDemo.main(AuthenticationExcDemo.java:34)
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