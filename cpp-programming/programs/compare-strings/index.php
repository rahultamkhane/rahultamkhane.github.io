<?php 
require("../../../libs/config.php");
$title = "C++ Program to Compare Two Strings";
$description = "In this program, you'll learn to compare two strings. <br><br>This <mark>strcmp()</mark> function is used to compare the string arguments.<br><br>It compares strings lexicographically which means it compares both the strings character by character.<br><br>It starts comparing the very first character of strings until the characters of both strings are equal or NULL character is found.
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
          <div class="bread-title"><h2>C++ Program to Compare Two Strings</h2></div>
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
				<h2 class="blog-title">C++ Program to Compare Two Strings</h2>
				<p>In this program, you'll learn to compare two strings. <br><br>This <mark>strcmp()</mark> function is used to compare the string arguments.<br><br>It compares strings lexicographically which means it compares both the strings character by character.<br><br>It starts comparing the very first character of strings until the characters of both strings are equal or NULL character is found.
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
    int i;
    char str1[30], str2[30];

    cout&lt;&lt;"Enter the first string\n";
    cin&gt;&gt; str1;
    cout&lt;&lt;"Enter the second string\n";
    cin&gt;&gt; str2;

    if(strcmp(str1, str2) == 0)
    {
        cout&lt;&lt;"Both strings are EQUAL";
    }
    else
    {
        cout&lt;&lt;"Both strings are NOT EQUAL";
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the first string
rahul
Enter the second string
rahul
Both strings are EQUAL


Enter the first string
yellow
Enter the second string
yello
Both strings are NOT EQUAL
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