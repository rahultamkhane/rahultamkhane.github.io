<?php 
require("../../../libs/config.php");
$title = "C++ Program to Display the Details of Employee Using Structure";
$description = "In this program, you'll learn to declare structure 'employee' having data member name, age, street and city. Accept data for two employees and display it.
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
          <div class="bread-title"><h2>C++ Program to Display the Details of Employee Using Structure</h2></div>
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
				<h2 class="blog-title">C++ Program to Display the Details of Employee Using Structure</h2>
				<p>In this program, you'll learn to declare structure 'employee' having data member name, age, street and city. Accept data for two employees and display it.
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

struct employee
{
    char name[20], street[20], city[20];
    int age;
};

int main()
{
    struct employee e[3];
    int i;
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;"Enter Employee's name: ";
        cin&gt;&gt; e[i].name;
        cout&lt;&lt;"Enter age: ";
        cin&gt;&gt; e[i].age;
        cout&lt;&lt;"Enter street: ";
        cin&gt;&gt; e[i].street;
        cout&lt;&lt;"Enter city: ";
        cin&gt;&gt; e[i].city;
    }
    cout&lt;&lt;"\nFollowing are the details of employees:\n\n";
    for(i=0; i&lt;3; i++)
    {
        cout&lt;&lt;e[i].name &lt;&lt; ", ";
        cout&lt;&lt;e[i].age &lt;&lt; ", ";
        cout&lt;&lt;e[i].street &lt;&lt; ", ";
        cout&lt;&lt;e[i].city &lt;&lt; "\n";
    }
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter Employee's name: Rajesh
Enter age: 25
Enter street: SataraRoad
Enter city: Pune
Enter Employee's name: Kamla
Enter age: 22
Enter street: VinodNagar
Enter city: Jalgaon
Enter Employee's name: Dinesh
Enter age: 38
Enter street: ConvexMall
Enter city: Mumbai

Following are the details of employees:

Rajesh, 25, SataraRoad, Pune
Kamla, 22, VinodNagar, Jalgaon
Dinesh, 38, ConvexMall, Mumbai
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