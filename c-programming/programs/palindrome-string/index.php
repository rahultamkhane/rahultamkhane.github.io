<?php 
require("../../../libs/config.php");
$title = "C Program to Check Whether a String is Palindrome or not";
$description = "In this program, you'll learn to check a given string is Palindrome or not.

A string is called Palindrome, if the original string and reverse string of original string are same.

To check if a string is palindrome or not follow below steps:

1) Declare two string: f and r.

2) Find Reverse of string.

3) Check if the reversed string is equal to the given string.";
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
              <li><a href="<?php echo SITE_DIR;?>c-programming/">C Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>c-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>C Program to Check Whether a String is Palindrome or not</h2></div>
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
				<h2 class="blog-title">C Program to Check Whether a String is Palindrome or not</h2>
				<p>In this program, you'll learn to check a given string is Palindrome or not.

A string is called Palindrome, if the original string and reverse string of original string are same.

To check if a string is palindrome or not follow below steps:

1) Declare two string: f and r.

2) Find Reverse of string.

3) Check if the reversed string is equal to the given string.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
void main()
{
    int f, r, len=0;
    char str[20];
    //clrscr();
    printf("Enter the string: ");
    scanf("%s", str);

    // First calculate the length of string
    while(str[len] != '\0')
    {
        len++;
    }

    f = 0;
    r = len-1;

    while(f &lt;= r)
    {
        if(str[f++] != str[r--])
        {
            printf("String is not Palindrome");
            return;
        }
    }
    printf("String is Palindrome");
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the string: nitin
String is Palindrome

Enter the string: ramesh
String is not Palindrome</code></pre>
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