<?php 
require("../../../libs/config.php");
$title = "C Program to Concatenate Two Strings Without Using String Function";
$description = "In this program, the user is ask to enter the two strings, then the second string is concatenated (or attached) with first string.

The basic logic is that you have scan first string upto the last character, then read second string one by one and attach it to last of first string.

For example,

s1 = \"Hello,\"
s2 = \"How are you?\"

Then after string concatenation (means s1 + s2) you will get "Hello, How are you?".

You can use <mark>strcat()</mark> String function to do the same thing, here we have not used this function.";
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
          <div class="bread-title"><h2>C Program to Concatenate Two Strings Without Using String Function</h2></div>
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
				<h2 class="blog-title">C Program to Concatenate Two Strings Without Using String Function</h2>
				<p>In this program, the user is ask to enter the two strings, then the second string is concatenated (or attached) with first string.

The basic logic is that you have scan first string upto the last character, then read second string one by one and attach it to last of first string.

For example,

s1 = "Hello,"
s2 = "How are you?"

Then after string concatenation (means s1 + s2) you will get "Hello, How are you?".

You can use <mark>strcat()</mark> String function to do the same thing, here we have not used this function.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

int main()
{
    char s1[40], s2[20];
    int i, j;
    printf("Enter first strings:");
    scanf("%s", s1);
    printf("Enter second strings:");
    scanf("%s", s2);

    // calculate the length of string s1
    // and store it in i
    for(i = 0; s1[i] != '\0'; ++i);

    for(j = 0; s2[j] != '\0'; ++j, ++i)
    {
        s1[i] = s2[j];
    }
    s1[i] = '\0';
    printf("After concatenation:\n %s", s1);
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter first strings:Hello
Enter second strings:World!!
After concatenation:
 HelloWorld!!</code></pre>
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