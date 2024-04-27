<?php 
require("../../../libs/config.php");
$title = "C Program to Read a Valid Number (goto statement)";
$description = "In this program, the user is ask for integer number, if he/she enters 0 (ZERO) then it will again ask for the number until he enters a valid number.

Here we have used <mark>goto</mark> statement. 

A <mark>goto</mark> statement in C programming provides an unconditional jump from the 'goto' to a labeled statement in the same function. Any program that uses a goto can be rewritten to avoid them.

Syntax:
     goto label;

Example:
     goto start;      ";
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
          <div class="bread-title"><h2>C Program to Read a Valid Number (goto statement)</h2></div>
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
				<h2 class="blog-title">C Program to Read a Valid Number (goto statement)</h2>
				<p>In this program, the user is ask for integer number, if he/she enters 0 (ZERO) then it will again ask for the number until he enters a valid number.

Here we have used <mark>goto</mark> statement. 

A <mark>goto</mark> statement in C programming provides an unconditional jump from the 'goto' to a labeled statement in the same function. Any program that uses a goto can be rewritten to avoid them.

Syntax:
     goto label;

Example:
     goto start;      </p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include &lt;stdio.h&gt;

int main ()
{
    int no;
    accept:
        printf ("Enter any Number: ");
    scanf ("%d", &no);
    if (no == 0)
        goto accept;
    printf("You have entered %d", no);
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter any Number: 0
Enter any Number: 0
Enter any Number: 12
You have entered 12</code></pre>
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