<?php 
require("../../../libs/config.php");
$title = "C++ Program to Check Whether a Number is Palindrome Number or not";
$description = "In this program, you'll learn to check a given number is Palindrome number or not.<br><br>A palindrome number is a number that is same after reverse. For example 121, 34543, 343, 131, 48984 are the palindrome numbers.<br><br>To check if a number is palindrome or not follow below steps:<br><br>1) Declare two variables: one stores the given number, and the other stores the reversed number.<br><br>2) Run the while loop until the number is greater than zero.<br><br>3) Check if the reversed number is equal to the given number.
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
          <div class="bread-title"><h2>C++ Program to Check Whether a Number is Palindrome Number or not</h2></div>
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
				<h2 class="blog-title">C++ Program to Check Whether a Number is Palindrome Number or not</h2>
				<p>In this program, you'll learn to check a given number is Palindrome number or not.<br><br>A palindrome number is a number that is same after reverse. For example 121, 34543, 343, 131, 48984 are the palindrome numbers.<br><br>To check if a number is palindrome or not follow below steps:<br><br>1) Declare two variables: one stores the given number, and the other stores the reversed number.<br><br>2) Run the while loop until the number is greater than zero.<br><br>3) Check if the reversed number is equal to the given number.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="cpp">#include&lt;iostream&gt;
using namespace std;

int main()
{
    int num, original, rev=0, digit, i;

    cout&lt;&lt;"Enter the number: ";
    cin&gt;&gt;num;

    original = num;
    i = 1;
    while(num &gt; 0)
    {
        digit = num%10;
        rev = rev*10 + digit;
        num = num/10;
    }
    if(original == rev)
        cout&lt;&lt;"Number is palindrome";
    else
        cout&lt;&lt;"Number is not palindrome";
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the number: 123
Number is not palindrome

Enter the number: 12321
Number is palindrome
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