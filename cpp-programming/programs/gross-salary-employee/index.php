<?php 
require("../../../libs/config.php");
$title = "C++ Program for Print Gross Salary of Employee";
$description = "C++ program to find gross salary of employee. Accept basic salary from user. If basic salary is less than 2000 then calculate HRA = 11% and DA = 80% of basic salary. If basic salary is equal or greater than 2000 then HRA = 600 and calculate DA = 95% of basic salary. Display gross salary.<br><br>(gross salary = basic salary + HRA + DA)
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
          <div class="bread-title"><h2>C++ Program for Print Gross Salary of Employee</h2></div>
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
				<h2 class="blog-title">C++ Program for Print Gross Salary of Employee</h2>
				<p>C++ program to find gross salary of employee. Accept basic salary from user. If basic salary is less than 2000 then calculate HRA = 11% and DA = 80% of basic salary. If basic salary is equal or greater than 2000 then HRA = 600 and calculate DA = 95% of basic salary. Display gross salary.<br><br>(gross salary = basic salary + HRA + DA)
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
    float g_sal=0;
    float b_sal;
    float hra;
    float da;

    cout&lt;&lt;"Enter the basic salary: ";
    cin&gt;&gt; b_sal;

    if(b_sal &lt; 2000)
    {
        hra = b_sal * 0.11;
        da = b_sal * 0.80;
        g_sal = b_sal + hra + da;
    }
    else if(b_sal &gt;= 2000)
    {
        hra = 600;
        da = b_sal * 0.95;
        g_sal = b_sal + hra + da;
    }
    else
    {
        cout&lt;&lt;"Not valid";
    }
    cout&lt;&lt; "HRA = " &lt;&lt; hra;
    cout&lt;&lt; "\nDA = " &lt;&lt; da;
    cout&lt;&lt; "\nGross salary is " &lt;&lt; g_sal;
    return 0;
}
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre class="hljs"><code class="plaintext p-3">Enter the basic salary: 1900
HRA = 209.000000
DA = 1520.000000
Gross salary is 3629.000000

Enter the basic salary: 12000
HRA = 600.000000
DA = 11400.000000
Gross salary is 24000.000000
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