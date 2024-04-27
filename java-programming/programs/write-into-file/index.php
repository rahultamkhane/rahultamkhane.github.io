<?php 
require("../../../libs/config.php");
$title = "Java Program to Write Data into File Using Character Stream";
$description = "Write a Java program to Write data into file using <mark>Character Stream</mark>.";
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
          <div class="bread-title"><h2>Java Program to Write Data into File Using Character Stream</h2></div>
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
				<h2 class="blog-title">Java Program to Write Data into File Using Character Stream</h2>
				<p>Write a Java program to Write data into file using <mark>Character Stream</mark>.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">import java.io.BufferedReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;

class WriteIntoFile {

	public static void main(String[] args) throws IOException {

		String str;
		FileWriter outFile;
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		
		try {
			// Create a FileWriter.
			outFile = new FileWriter("output.txt");
		} catch (IOException e) {
			
			System.out.println("Cannot open file.");
			return;
		}  
		
		System.out.println("Enter text ('stop' to quit).");
		do {
			System.out.print(": ");
			str = br.readLine();
			if(str.compareTo("stop") == 0) 
				break;
			str = str + "\r\n"; // add newline
			outFile.write(str);	//Write strings to the file.
		} while(str.compareTo("stop") != 0);
		outFile.close();
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">C:\>javac WriteIntoFile.java
C:\>java WriteIntoFile
Enter text ('stop' to quit).
: Hi I am Rahul
: How are you ?
: stop
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