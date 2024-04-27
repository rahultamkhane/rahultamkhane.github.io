<?php 
require("../../../libs/config.php");
$title = "C Program to Check String is Palindrome or not";
$description = "In this program, you'll learn how to check string is palindrome or not.

The basic logic is that you have to find the reverse string and compare it with original string. If both are equal the string is Palindrome otherwise not.

We have used three string functions which are: <mark>strcpy()</mark>, <mark>strrev()</mark> and <mark>strcmp()</mark>

The <mark>strcpy()</mark> is the C library function copies the string pointed by source (including the null character) to the destination. The <mark>strcpy()</mark> function also returns the copied string.

The function definition of <mark>strcpy()</mark> is: 

char *strcpy(const char *dest, const char *src)

The <mark>strrev()</mark> is the C library function which reverses a given string.

The function definition of <mark>strrev()</mark> is: 

char *strrev(const char *str);

The <mark>strcmp()</mark> is the C library function  compares the string pointed to, by str1 to the string pointed to by str2.

The function definition of <mark>strcmp()</mark> is: 

int strcmp(const char *str1, const char *str2)

For example,

str = "nitin"

If you take the reverse of this string, then you will get "nitin" which same as original string, means it is Palindrome string.";
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
          <div class="bread-title"><h2>C Program to Check String is Palindrome or not</h2></div>
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
				<h2 class="blog-title">C Program to Check String is Palindrome or not</h2>
				<p>In this program, you'll learn how to check string is palindrome or not.

The basic logic is that you have to find the reverse string and compare it with original string. If both are equal the string is Palindrome otherwise not.

We have used three string functions which are: <mark>strcpy()</mark>, <mark>strrev()</mark> and <mark>strcmp()</mark>

The <mark>strcpy()</mark> is the C library function copies the string pointed by source (including the null character) to the destination. The <mark>strcpy()</mark> function also returns the copied string.

The function definition of <mark>strcpy()</mark> is: 

char *strcpy(const char *dest, const char *src)

The <mark>strrev()</mark> is the C library function which reverses a given string.

The function definition of <mark>strrev()</mark> is: 

char *strrev(const char *str);

The <mark>strcmp()</mark> is the C library function  compares the string pointed to, by str1 to the string pointed to by str2.

The function definition of <mark>strcmp()</mark> is: 

int strcmp(const char *str1, const char *str2)

For example,

str = "nitin"

If you take the reverse of this string, then you will get "nitin" which same as original string, means it is Palindrome string.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;string.h&gt;

int main ()
{
    char str1[20],str2[20];
    printf("Enter string which to be checked: ");
    scanf("%s", str1);
    strcpy(str2, str1);
    strrev(str2);
    if(strcmp(str1, str2) == 0)
        printf("String is palindrome ");
    else
        printf("String is not palindrome ");
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter string which to be checked: nitin
string is palindrome

Enter string which to be checked: abca
String is not palindrome</code></pre>
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