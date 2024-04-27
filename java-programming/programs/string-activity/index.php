<?php 
require("../../../libs/config.php");
$title = "Java Program for String and String Buffer class";
$description = "Write a Java program to implement a program to accomplish the following task using string / string buffer class :<br><br>
i. Accept a password from user.<br>
ii. Check if password is correct then display 'Good' else display 'Password is incorrect'<br>
iii. Append the password with the string 'welcome to Java!!!'<br>
iv. Display the password in reverse order.<br>
v. Replace the character '!' in password with '*' character.";
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
          <div class="bread-title"><h2>Java Program for String and String Buffer class</h2></div>
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
				<h2 class="blog-title">Java Program for String and String Buffer class</h2>
				<p>Write a Java program to implement a program to accomplish the following task using string / string buffer class :<br><br>
i. Accept a password from user.<br>
ii. Check if password is correct then display 'Good' else display 'Password is incorrect'<br>
iii. Append the password with the string 'Welcome to Java!!!'<br>
iv. Display the password in reverse order.<br>
v. Replace the character '!' in password with '*' character.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.lang.*;
import java.io.*;

public class StringActivity {
	
	public static void main(String args[]) throws IOException {
		
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		String s1 = "admin!";
		String s2;
		System.out.println ("Enter Password");
		s2 = br.readLine();
		
		if(s1.compareTo(s2)==0) {
			
			System.out.println ("Good");
		}
		else {
			
			System.out.println ("Password is incorrect");
			System.exit(0);
		}
		
		String s3 = "Welcome to Java!!!";
		StringBuffer sb = new StringBuffer(s1);
		sb.append(s3);
		
		System.out.println ("Appended Password = "+sb);
		StringBuffer s4 = new StringBuffer(s1);
		s4=s4.reverse();
		
		System.out.println ("String in Reverse Order = "+s4);
		System.out.println ("Replaced '!' with '*' = "+s1.replace('!','*'));	
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter Password
admin!
Good
Appended Password = admin!Welcome to Java!!!
String in Reverse Order = !nimda
Replaced '!' with '*' = admin*
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