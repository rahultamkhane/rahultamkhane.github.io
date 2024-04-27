<?php 
require("../../../libs/config.php");
$title = "C++ Program to Calculate Gross Salary";
$description = "In this program, you will learn to calculate Gross Salary from Basic Salary, DA and HRA.<br><br>The formula to calculate Gross Salary is as follows:<br><br>da = (15 * basic_sal) / 100;<br>hra = (10 * basic_sal) / 100;<br><br>gross_sal = basic_sal + da + hra;
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
          <div class="bread-title"><h2>C++ Program to Calculate Gross Salary</h2></div>
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
				<h2 class="blog-title">C++ Program to Calculate Gross Salary</h2>
				<p>In this program, you will learn to calculate Gross Salary from Basic Salary, DA and HRA.<br><br>The formula to calculate Gross Salary is as follows:<br><br>da = (15 * basic_sal) / 100;<br>hra = (10 * basic_sal) / 100;<br><br>gross_sal = basic_sal + da + hra;
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
    int gross_sal, basic_sal, da, hra;

    cout&lt;&lt;"Please enter Basic Salary: ";
    cin&gt;&gt; basic_sal;

    da = (15 * basic_sal) / 100;
    hra = (10 * basic_sal) / 100;

    gross_sal = basic_sal + da + hra;

    cout&lt;&lt;"\n Basic Salary = " &lt;&lt; basic_sal;
    cout&lt;&lt;"\n DA = " &lt;&lt; da;
    cout&lt;&lt;"\n HRA = " &lt;&lt; hra;
    cout&lt;&lt;"\n Gross Salary = " &lt;&lt; gross_sal;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Please enter Basic Salary: 15000

 Basic Salary = 15000
 DA = 2250
 HRA = 1500
 Gross Salary = 18750
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