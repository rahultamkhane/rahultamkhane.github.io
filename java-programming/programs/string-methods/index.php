<?php 
require("../../../libs/config.php");
$title = "Java Program to demonstrate use of 'String' class methods";
$description = "Write a Java program to demonstrate use of some of <mark>'String'</mark> class methods.";
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
          <div class="bread-title"><h2>Java Program to demonstrate use of 'String' class methods</h2></div>
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
				<h2 class="blog-title">Java Program to demonstrate use of 'String' class methods</h2>
				<p>Write a Java program to demonstrate use of some of <mark>'String'</mark> class methods.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="java">public class UsingStringMethods {

	public static void main(String[] args) {

		int n;
	    String s = "Java programming", t = "", u = "";
	 
	    System.out.println(s);
	 
	    // Find length of string
	 
	    n = s.length();
	    System.out.println("Lenght of String = " + n);
	 
	    // Replace characters in string
	 
	    t = s.replace("Java", "C++");
	    System.out.println("Before replacing 'Java' by 'C++':" + s);
	    System.out.println("After replacing 'Java' by 'C++':" + t);
	 
	    // Concatenating string with another string
	 
	    u = s.concat(" is fun");
	    System.out.println("Before concate : " + s);
	    System.out.println("After concate : " + u);
	}
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Java programming
Lenght of String = 16
Before replacing 'Java' by 'C++':Java programming
After replacing 'Java' by 'C++':C++ programming
Before concate : Java programming
After concate : Java programming is fun
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