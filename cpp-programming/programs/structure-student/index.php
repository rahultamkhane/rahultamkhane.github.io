<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display the Details of Student Using Structure";
$description = "In this program, you'll learn to declare structure student having member variables are roll-no., name and marks. Accept data for one student and display it.
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
          <div class="bread-title"><h2>C++ Program to Display the Details of Student Using Structure</h2></div>
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
				<h2 class="blog-title">C++ Program to Display the Details of Student Using Structure</h2>
				<p>In this program, you'll learn to declare structure student having member variables are roll-no., name and marks. Accept data for one student and display it.
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

struct student
{
    int roll_no;
    char name[20];
    float marks;
};
int main()
{
    struct student s;
    cout&lt;&lt;"Enter student's roll number: ";
    cin&gt;&gt; s.roll_no;
    cout&lt;&lt;"Enter student's name: ";
    cin&gt;&gt; s.name;
    cout&lt;&lt;"Enter student's marks: ";
    cin&gt;&gt; s.marks;
    cout&lt;&lt;"\nStudent's details are:";
    cout&lt;&lt;"\n Roll number=" &lt;&lt; s.roll_no;
    cout&lt;&lt;"\n Name=" &lt;&lt; s.name;
    cout&lt;&lt;"\n Marks=" &lt;&lt; s.marks;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter student's roll number: 5
Enter student's name: Santosh
Enter student's marks: 75.50

Student's details are:
 Roll number=5
 Name=Santosh
 Marks=75.500000
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