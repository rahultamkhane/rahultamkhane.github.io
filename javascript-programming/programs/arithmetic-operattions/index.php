<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Perform Arithmetic Operations";
$description = "Write a JavaScript program to perform arithmetic operations.
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
              <li><a href="<?php echo SITE_DIR;?>javascript-programming/">JavaScript Programming</a></li>
			  <li><a href="<?php echo SITE_DIR;?>javascript-programming/programs/">All Programs</a></li>
            </ul>
          </div>
          <!-- Bread Title -->
          <div class="bread-title"><h2>JavaScript Program to Perform Arithmetic Operations</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Perform Arithmetic Operations</h2>
				<p>Write a JavaScript program to perform arithmetic operations.
</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Arithmetic Operations on button click&lt;/title&gt;
&lt;script&gt;
    var n1, n2, result;
    function addNums() {
        n1 = parseInt(document.getElementById("num1").value);
        n2 = parseInt(document.getElementById("num2").value);
        result = n1 + n2;
        document.getElementById("result").value = result;
    }
    function subNums() {
        n1 = parseInt(document.getElementById("num1").value);
        n2 = parseInt(document.getElementById("num2").value);
        result = n1 - n2;
        document.getElementById("result").value = result;
    }
    function mulNums() {
        n1 = parseInt(document.getElementById("num1").value);
        n2 = parseInt(document.getElementById("num2").value);
        result = n1 * n2;
        document.getElementById("result").value = result;
    }
    function divNums() {
        n1 = parseInt(document.getElementById("num1").value);
        n2 = parseInt(document.getElementById("num2").value);
        result = n1 / n2;
        document.getElementById("result").value = result;
    }
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form&gt;
First number &lt;input id="num1" type="text" &gt;&lt;br&gt;&lt;br&gt;
Second number &lt;input id="num2" type="text"&gt;&lt;br&gt;&lt;br&gt;
Result &lt;input id="result" type="text"&gt;&lt;br&gt;&lt;br&gt;
&lt;input type="button" value="Add (+)" onclick="addNums()"&gt;
&lt;input type="button" value="Sub (-)" onclick="subNums()"&gt;
&lt;input type="button" value="Mul (*)" onclick="mulNums()"&gt;
&lt;input type="button" value="Div (/)" onclick="divNums()"&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="arithmetic-operattions.jpg"></code></pre>
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