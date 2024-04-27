<?php 
require("../../../libs/config.php");
$title = "C Program to Convert Lowercase Character to Uppercase";
$description = "In this program, you'll learn to convert lowercase to uppercase character and vise-versa.";
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
          <div class="bread-title"><h2>C Program to Convert Lowercase Character to Uppercase</h2></div>
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
				<h2 class="blog-title">C Program to Convert Lowercase Character to Uppercase</h2>
				<p>In this program, you'll learn to convert lowercase to uppercase character and vise-versa.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

int main(int argc, char const *argv[])
{
    int ch;
    char c;

    printf("1 :: lowercase to UPPERCASE\n");
    printf("2 :: UPPERCASE to lowercase\n");
    printf("Enter ur choice (1/2): ");
    scanf("%d", &ch);

    switch (ch)
    {
    case 1:
        printf("Enter any character (a-z): ");
        scanf(" %c", &c);
        printf("Uppercase is: %c", c-32);
        break;
    case 2:
        printf("Enter any character (A-Z): ");
        scanf(" %c", &c);
        printf("Uppercase is: %c", c+32);
        break;
    default:
        printf("Wrong choice, try again..");
        break;
    }
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">1 :: lowercase to UPPERCASE
2 :: UPPERCASE to lowercase
Enter ur choice (1/2): 1
Enter any character (a-z): a
Uppercase is: A

1 :: lowercase to UPPERCASE
2 :: UPPERCASE to lowercase
Enter ur choice (1/2): 2
Enter any character (A-Z): S
Uppercase is: s

1 :: lowercase to UPPERCASE
2 :: UPPERCASE to lowercase
Enter ur choice (1/2): 3
Wrong choice, try again..</code></pre>
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