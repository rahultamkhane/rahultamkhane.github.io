<?php 
require("../../../libs/config.php");
$title = "C Program to Compare Two Strings Using strcmp() Function";
$description = "In this program, you'll learn how to compare two strings for equality using <mark>strcmp()</mark> function of string.

The <mark>strcmp()</mark> is the C library function  compares the string pointed to, by str1 to the string pointed to by str2.

The function definition of <mark>strcmp()</mark> is: 

int strcmp(const char *str1, const char *str2)

For example,

s1 = \"Hello,\"
s2 = \"How are you?\"

Then after string compare (means s1 == s2) the compiler will return false because both string are different.";
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
          <div class="bread-title"><h2>C Program to Compare Two Strings Using strcmp() Function</h2></div>
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
				<h2 class="blog-title">C Program to Compare Two Strings Using strcmp() Function</h2>
				<p>In this program, you'll learn how to compare two strings for equality using <mark>strcmp()</mark> function of string.

The <mark>strcmp()</mark> is the C library function  compares the string pointed to, by str1 to the string pointed to by str2.

The function definition of <mark>strcmp()</mark> is: 

int strcmp(const char *str1, const char *str2)

For example,

s1 = "Hello,"
s2 = "How are you?"

Then after string compare (means s1 == s2) the compiler will return false because both string are different.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;
#include&lt;string.h&gt;

int main()
{
    char st1[20],st2[20];
    printf("Enter first string : ");
    scanf("%s", st1);
    printf("Enter second string: ");
    scanf("%s", st2);
    if(strcmp(st1,st2)==0)
        printf("\nBoth strings are equal");
    else
        printf("\nStrings are not equal");
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter first string : santosh
Enter second string: Santosh

Strings are not equal

Enter first string : Suraj
Enter second string: Suraj

Both strings are equal</code></pre>
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