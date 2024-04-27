<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Change Menu Options Dynamically";
$description = "Write a JavaScript program to change menu options dynamically.";
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
              <li><a href="<?php echo SITE_DIR;?>javascript-programming/">JavaScript Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>javascript-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>JavaScript Program to Change Menu Options Dynamically</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Change Menu Options Dynamically</h2>
				<p>Write a JavaScript program to change menu options dynamically.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Dynamically Changing Menu Options&lt;/title&gt;
    &lt;script&gt;
        compStaff = new Array('R. S. Tamkhane', 'A. B. Chavan', 'S. C. Waghmare');
        etcStaff = new Array('ABC', 'XYZ');

        function Getemployees(Department) 
        {
            // clear out the current options
            for(i = document.form1.employees.options.length-1; i&gt; 0; i--)
            {
                document.form1.employees.options.remove(i);
            }
            
            dept = Department.options[Department.selectedIndex].value;
            if (dept != "") 
            {
                if (dept == '1')
                {
                    for (i=1; i &lt;= compStaff.length; i++) 
                    {
                        document.form1.employees.options[i] = new Option(compStaff[i-1])
                    }
                }
                if (dept == '2')
                {
                    for (i = 1; i &lt;= etcStaff.length; i++) 
                    {
                        document.form1.employees.options[i] = new Option(etcStaff[i-1])
                    }
                }
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body onload="document.form1.deptList.selectedIndex=0"&gt;
&lt;form action="MyCGI.cgi" name="form1"&gt;
    &lt;select name="deptList" onchange="Getemployees(this)"&gt;
        &lt;option value="0"&gt;Department&lt;/option&gt;
        &lt;option value="1"&gt;Computer&lt;/option&gt;
        &lt;option value="2"&gt;E & TC&lt;/option&gt;
    &lt;/select&gt;
    &lt;select name="employees"&gt;
        &lt;option value="0"&gt;employees&lt;/option&gt;
    &lt;/select&gt;
    &lt;br&gt;
    &lt;p&gt;
    &lt;input type="submit" value="Submit" /&gt;
    &lt;input type="reset" /&gt;
    &lt;/p&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="chain-select-menu.jpg"></code></pre>
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