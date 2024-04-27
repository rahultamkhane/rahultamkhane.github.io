<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Find Average Marks and Display the Grade";
$description = "Write a JavaScript program which compute, the average marks of the following students then, this average is used to determine the corresponding grade.";
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
          <div class="bread-title"><h2>JavaScript Program to Find Average Marks and Display the Grade</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Find Average Marks and Display the Grade</h2>
				<p>Write a JavaScript program which compute, the average marks of the following students then, this average is used to determine the corresponding grade.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Find average and grade of students&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    var students = [['Advait', 80], ['Anay', 77], ['Manyata', 88], 
                    ['Saanvi', 95], ['Saachi', 68]];

    var marks = 0;

    for (var i=0; i &lt; students.length; i++) {
        marks += students[i][1];
    }

    var avg = (marks / students.length);

    document.write("Average grade: " + avg);
    document.write("&lt;br&gt;");

    if (avg &lt; 60)
    {
        document.write("Grade : F");     
    } 
    else if (avg &lt; 70) 
    {
        document.write("Grade : D"); 
    } 
    else if (avg &lt; 80) 
    {
        document.write("Grade : C"); 
    } 
    else if (avg &lt; 90) 
    {
        document.write("Grade : B"); 
    } 
    else if (avg &lt; 100) 
    {
        document.write("Grade : A"); 
    }
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="find-student-average-grade.jpg"></code></pre>
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