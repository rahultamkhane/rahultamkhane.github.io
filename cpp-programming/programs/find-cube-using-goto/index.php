<?php 
require("../../../libs/config.php");
$title = "C++ Program to Find Cube of a Number N Time (goto statement)";
$description = "In this program, you'll learn to find cube of number user provided times.<br><br>Here we have used <mark>goto</mark> statement.<br><br>A <mark>goto</mark> statement in C programming provides an unconditional jump from the 'goto' to a labeled statement in the same function. Any program that uses a goto can be rewritten to avoid them.<br><br>Syntax:&nbsp;&nbsp;&nbsp;&nbsp;goto label;<br><br>Example:&nbsp;&nbsp;&nbsp;&nbsp;goto start;<br><br>First time the user is ask for the number then cube will be find and displayed. After that it will again ask user for the continue option.<br><br>If user enters choice as 1 then it will goto start asks for the next number, if user enters choice as 0 then program will terminate.
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
          <div class="bread-title"><h2>C++ Program to Find Cube of a Number N Time (goto statement)</h2></div>
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
				<h2 class="blog-title">C++ Program to Find Cube of a Number N Time (goto statement)</h2>
				<p>In this program, you'll learn to find cube of number user provided times.<br><br>Here we have used <mark>goto</mark> statement.<br><br>A <mark>goto</mark> statement in C programming provides an unconditional jump from the 'goto' to a labeled statement in the same function. Any program that uses a goto can be rewritten to avoid them.<br><br>Syntax:&nbsp;&nbsp;&nbsp;&nbsp;goto label;<br><br>Example:&nbsp;&nbsp;&nbsp;&nbsp;goto start;<br><br>First time the user is ask for the number then cube will be find and displayed. After that it will again ask user for the continue option.<br><br>If user enters choice as 1 then it will goto start asks for the next number, if user enters choice as 0 then program will terminate.
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
    int n, ch;
start:
    cout&lt;&lt;"\nEnter the number: ";
    cin&gt;&gt; n;

    cout&lt;&lt; n*n*n;
    cout&lt;&lt;"\nDo u want to continue (1/0): ";
    cin&gt;&gt; ch;

    if(ch == 1)
        goto start;
    cout&lt;&lt;"GOOD BYE..";
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the number: 7
Cube = 343
Do u want to continue (1/0): 1

Enter the number: 5
Cube = 125
Do u want to continue (1/0): 0
GOOD BYE..
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