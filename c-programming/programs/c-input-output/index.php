<?php 
require("../../../libs/config.php");
$title = "C Program to Display the Numbers Entered by User";
$description = "In this program, you will learn to get the input from user and display them on console. 

Here we have used  <mark>scanf() </mark> and <mark>printf() </mark> functions.

<mark>printf()</mark> and <mark>scanf()</mark> functions are inbuilt library functions in C programming language which are available in C library by default. These functions are declared and related macros are defined in “<mark>stdio.h</mark>” which is a header file in C language.

We have to include “<mark>stdio.h</mark>” file as shown in below C program to make use of these <mark>printf()</mark> and <mark>scanf()</mark> library functions in C language.

In C programming language, <mark>printf() </mark> function is used to print the (“character, string, float, integer, octal and hexadecimal values”) onto the output screen.

We use  <mark>printf()</mark> function with  <mark>%d </mark> format specifier to display the value of an integer variable.
Similarly  <mark>%c </mark> is used to display character,  <mark>%f </mark> for float variable,  <mark>%s </mark> for string variable,  <mark>%lf </mark> for double and  <mark>%x </mark> for hexadecimal variable.

To generate a newline, we use “ <mark>\n </mark>” in C printf() statement.

This function is declared and related macros are defined in “<mark>stdio.h</mark>” which is a header file in C language.";
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
          <div class="bread-title"><h2>C Program to Display the Numbers Entered by User</h2></div>
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
				<h2 class="blog-title">C Program to Display the Numbers Entered by User</h2>
				<p>In this program, you will learn to get the input from user and display them on console. 

Here we have used  <mark>scanf() </mark> and <mark>printf() </mark> functions.

<mark>printf()</mark> and <mark>scanf()</mark> functions are inbuilt library functions in C programming language which are available in C library by default. These functions are declared and related macros are defined in “<mark>stdio.h</mark>” which is a header file in C language.

We have to include “<mark>stdio.h</mark>” file as shown in below C program to make use of these <mark>printf()</mark> and <mark>scanf()</mark> library functions in C language.

In C programming language, <mark>printf() </mark> function is used to print the (“character, string, float, integer, octal and hexadecimal values”) onto the output screen.

We use  <mark>printf()</mark> function with  <mark>%d </mark> format specifier to display the value of an integer variable.
Similarly  <mark>%c </mark> is used to display character,  <mark>%f </mark> for float variable,  <mark>%s </mark> for string variable,  <mark>%lf </mark> for double and  <mark>%x </mark> for hexadecimal variable.

To generate a newline, we use “ <mark>\n </mark>” in C printf() statement.

This function is declared and related macros are defined in “<mark>stdio.h</mark>” which is a header file in C language.</p>
				
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
    int num1, num2;
    clrscr();
    printf("Enter 2 numbers: ");
    scanf("%d%d", &num1, &num2);
    printf("The numbers are %d %d",num1,num2);
    getch();
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter 2 numbers: 15 36
The numbers are 15 36</code></pre>
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