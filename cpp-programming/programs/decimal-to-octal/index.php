<?php 
require("../../../libs/config.php");
$title = "C++ Program to Convert Decimal Number to Octal";
$description = "In this program, you'll learn to convert Ocatl number to Decimal number system.
";
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
              <li><a href="<?php echo SITE_DIR;?>cpp-programming/">C++ Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>cpp-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>C++ Program to Convert Decimal Number to Octal</h2></div>
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
				<h2 class="blog-title">C++ Program to Convert Decimal Number to Octal</h2>
				<p>In this program, you'll learn to convert Ocatl number to Decimal number system. Decimal to binary in C: We can convert any decimal number (base-10 (0 to 9)) into binary number(base-2 (0 or 1)) by c program.<br><br>Decimal number is a base 10 number, there are total 10 digits between 0 to 9. Any combination of digits is decimal number such as 23, 445, 132, 0, 2 etc.<br><br>Octal number is a base 8 number contains only 8 digits either 0 through 7. Any combination of digits is octal number such as 116, 33, 133, etc.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include &lt;stdio.h&gt;

int main()
{
    int dec, i, rem, c=1;
    int oct = 0;
    cout&lt;&lt;"Enter the Decimal number: ");
    cin&gt;&gt; dec;

    while(dec &gt; 0)
    {
        rem = dec % 8;
        oct = oct + rem * c;
        dec = dec / 8; 
        c = c * 10;
    }
    cout&lt;&lt;"Octal Equivalent is: " &lt;&lt; oct;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the Decimal number: 33
Octal Equivalent is: 41

Enter the Decimal number: 10
Octal Equivalent is: 12
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
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
?>
	</div>	<!-- /row -->

</div> <!-- /container -->
 
<?php 
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>