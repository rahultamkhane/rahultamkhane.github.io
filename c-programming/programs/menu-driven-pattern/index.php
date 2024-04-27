<?php 
require("../../../libs/config.php");
$title = "C Program for Menu Driven Pattern Program";
$description = "In this program, you'll learn menu driven program to print star and number pattern.";
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
          <div class="bread-title"><h2>C Program for Menu Driven Pattern Program</h2></div>
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
				<h2 class="blog-title">C Program for Menu Driven Pattern Program</h2>
				<p>In this program, you'll learn menu driven program to print star and number pattern.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

void pattern1();
void pattern2();
void pattern3();
void pattern4();

int main()
{
    int ch;
    printf("1. Pattern 1\n2. Pattern 2\n3. Pattern 3\n4. Pattern 4\n5. Exit\n");
    printf("Enter ur choice: ");
    scanf("%d", &ch);

    switch(ch)
    {
        case 1:
            pattern1();
            break;
        case 2:
            pattern2();
            break;
        case 3:
            pattern3();
            break;
        case 4:
            pattern4();
            break;
        case 5:
            printf("GOOD BYE..");
            break;
    }
}
void pattern1()
{
    int i, j;
    for(i=0;i&lt;5;i++)
    {
        for(j=0; j&lt;5; j++)
        {
            printf("*");
        }
        printf("\n");
    }
}
void pattern2()
{
    int i, j;
    for(i=0;i&lt;5;i++)
    {
        for(j=0; j&lt;=i; j++)
        {
            printf("*");
        }
        printf("\n");
    }
}
void pattern3()
{
    int i, j;
    for(i=0;i&lt;5;i++)
    {
        for(j=0; j&lt;=i; j++)
        {
            printf("%d",i+1);
        }
        printf("\n");
    }
}
void pattern4()
{
    int i, j, count=1;
    for(i=0;i&lt;5;i++)
    {
        for(j=0; j&lt;=i; j++)
        {
            printf("%d ",count);
            count++;
        }
        printf("\n");
    }
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">1. Pattern 1
2. Pattern 2
3. Pattern 3
4. Pattern 4
5. Exit
Enter ur choice: 1
*****
*****
*****
*****
*****

1. Pattern 1
2. Pattern 2
3. Pattern 3
4. Pattern 4
5. Exit
Enter ur choice: 2
*
**
***
****
*****

1. Pattern 1
2. Pattern 2
3. Pattern 3
4. Pattern 4
5. Exit
Enter ur choice: 3
1
22
333
4444
55555

1. Pattern 1
2. Pattern 2
3. Pattern 3
4. Pattern 4
5. Exit
Enter ur choice: 4
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15

1. Pattern 1
2. Pattern 2
3. Pattern 3
4. Pattern 4
5. Exit
Enter ur choice: 5
GOOD BYE..</code></pre>
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