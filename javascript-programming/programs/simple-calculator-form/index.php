<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Simple Calculator Using HTML Form";
$description = "Write a JavaScript program to create simple calculator using html form.";
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
          <div class="bread-title"><h2>JavaScript Program to Create Simple Calculator Using HTML Form</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create Simple Calculator Using HTML Form</h2>
				<p>Write a JavaScript program to create simple calculator using html form.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Arithmetic Operations using Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;script&gt;
    function add() 
    {
        var a = parseInt(document.getElementById('num1').value);
        var b = parseInt(document.getElementById('num2').value);
        var result = a+b;
        document.getElementById('result').innerHTML = result;
    }
    function sub() 
    {
        var a = parseInt(document.getElementById('num1').value);
        var b = parseInt(document.getElementById('num2').value);
        var result = a-b;
        document.getElementById('result').innerHTML = result;
    }
    function mul() 
    {
        var a = parseInt(document.getElementById('num1').value);
        var b = parseInt(document.getElementById('num2').value);
        var result = a*b;
        document.getElementById('result').innerHTML = result;
    }
    function div() 
    {
        var a = parseInt(document.getElementById('num1').value);
        var b = parseInt(document.getElementById('num2').value);
        var result = a/b;
        document.getElementById('result').innerHTML = result;
    }
    &lt;/script&gt;

&lt;form style="margin:auto;max-width:500px;"&gt;
    &lt;label&gt;First no.&nbsp;&nbsp;&nbsp;&nbsp;&lt;/label&gt;
    &lt;input type="text" id="num1"/&gt;&lt;br/&gt;&lt;br/&gt;
    &lt;label&gt;Second no.&lt;/label&gt;
    &lt;input type="text" id="num2"/&gt;&lt;br/&gt;&lt;br/&gt;
    &lt;input type="button" onClick="add();" value="ADD"/&gt;&nbsp;&nbsp;&nbsp;&nbsp;
    &lt;input type="button" onClick="sub();" value="SUB"/&gt;&lt;br/&gt;&lt;br/&gt;
    &lt;input type="button" onClick="mul();" value="MUL"/&gt;&nbsp;&nbsp;&nbsp;&nbsp;
    &lt;input type="button" onClick="div();" value="DIV"/&gt;
&lt;/form&gt;

&lt;p&gt;The result is: 
&lt;span id="result" style="color:red;"&gt;NONE&lt;/span&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="simple-calculator-form.jpg"></code></pre>
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