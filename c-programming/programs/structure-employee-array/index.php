<?php 
require("../../../libs/config.php");
$title = "C Program to Display the Details of Employee Using Array of Structure";
$description = "In this program, you'll learn to declare a structure 'employee' having name, designation and salary. Accept and display this information for five members.";
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
          <div class="bread-title"><h2>C Program to Display the Details of Employee Using Array of Structure</h2></div>
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
				<h2 class="blog-title">C Program to Display the Details of Employee Using Array of Structure</h2>
				<p>In this program, you'll learn to declare a structure "employee" having name, designation and salary. Accept and display this information for five members.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="c">#include&lt;stdio.h&gt;

struct employee
{
    char name[20];
    char designation[20];
    int salary;
}s[5];

int main()
{
    int i;
    //Accepting information
    printf("Enter details of 5 employees:\n");
    for(i=0;i&lt;5;i++)
    {
        printf("Enter name :");
        scanf("%s", s[i].name);
        printf("Enter designation :");
        scanf("%s", s[i].designation);
        printf("Enter salary :");
        scanf("%d", &s[i].salary);
    }
    //displaying information
    printf("\nThe details of emplyoees are :\n");
    for(i=0;i&lt;5;i++)
    {
        printf("%s\t%s\t%d", s[i].name, s[i].designation, s[i].salary);
    }
    return 0;
}</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter details of 5 employees:
Enter name :Mike
Enter designation :Accountant
Enter salary :15000
Enter name :Suraj
Enter designation :Professor
Enter salary :35000
Enter name :Harish
Enter designation :Clerk
Enter salary :15550
Enter name :Arnav
Enter designation :Professor
Enter salary :50000
Enter name :Shashank
Enter designation :Lecturer
Enter salary :25000

The details of emplyoees are :
Mike    Accountant      15000
Suraj   Professor       35000
Harish  Clerk   15550
Arnav   Professor       50000
Shashank        Lecturer        25000</code></pre>
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