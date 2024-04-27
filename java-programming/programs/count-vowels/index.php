<?php 
require("../../../libs/config.php");
$title = "Java Program to Count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a given string";
$description = "Write a Java program to accept a string from the console and count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a string.";
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
          <div class="bread-title"><h2>Java Program to Count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a given string</h2></div>
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
				<h2 class="blog-title">Java Program to Count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a given string</h2>
				<p>Write a Java program to accept a string from the console and count number of Vowels, Consonants, Digits, Tabs and Blank Spaces in a string.</p>
				
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

public class Vowels {

	public static void main(String args[]) throws IOException {
		
		String str;
		int vowels = 0, consonants = 0, digits = 0, tabs = 0, blanks_spaces = 0, other = 0;
		char ch;

		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.print("Enter a String : ");
		str = br.readLine();

		for(int i = 0; i &lt; str.length(); i ++) {
			
			ch = str.charAt(i);

			if(ch == 'a' || ch == 'A' || ch == 'e' || ch == 'E' || ch == 'i' || ch == 'I' || 
			                       ch == 'o' || ch == 'O' || ch == 'u' || ch == 'U') 
			{
				vowels ++;
			}
			else if(ch == '0' || ch == '1' || ch == '2' || ch == '3' || ch == '4' || ch == '5' ||
								   ch == '6' || ch == '7' || ch == '8' || ch == '9') 
			{   // You can use "Character.isDigit(ch)" condition 
				digits ++;
			}
			else if(ch == '\t') // Or you can use "Character.isWhitespace(ch)"
			{
				tabs ++;
			}
			else if(ch == ' ')
			{
				blanks_spaces++;
			}
			else if(Character.isAlphabetic(ch)) 
			{
				consonants++;
			}
			else
			{
				other++;
			}
		}

		System.out.println("No. of Vowels : " + vowels);
		System.out.println("No. of consonants : " + consonants);
		System.out.println("No. of Digits : " + digits);
		System.out.println("No. of Tabs : " + tabs);
		System.out.println("No. of Blank Spaces : " + blanks_spaces);
		System.out.println("No. of other characters : " + other);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter a String : This program is easy 2 understand !
No. of Vowels : 9
No. of consonants : 18
No. of Digits : 1
No. of Tabs : 0
No. of Blank Spaces : 6
No. of other characters : 1
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