<?php 
require("../../../libs/config.php");
$title = "JavaScript Program  to Check AADHAAR Card Format Using Regular Expression";
$description = "Write a JavaScript program  to check aadhaar card format using regular expression.<br><br>

Write a webpage that accepts Username and Aadhaar card as input texts. When the user enters Aadhaar card number ,the JavaScript validates card number and displays whether card number is valid or not. (Assume valid Aadhaar card format to be <mark>nnnn.nnnn.nnnn</mark> or <mark>nnnn-nnnn-nnnn</mark>).";
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
          <div class="bread-title"><h2>JavaScript Program  to Check AADHAAR Card Format Using Regular Expression</h2></div>
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
				<h2 class="blog-title">JavaScript Program  to Check AADHAAR Card Format Using Regular Expression</h2>
				<p>Write a JavaScript program  to check aadhaar card format using regular expression.<br><br>

Write a webpage that accepts Username and Aadhaar card as input texts. When the user enters Aadhaar card number ,the JavaScript validates card number and displays whether card number is valid or not. (Assume valid Aadhaar card format to be <mark>nnnn.nnnn.nnnn</mark> or <mark>nnnn-nnnn-nnnn</mark>).</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Regular expression - Check Aadhar card format&lt;/title&gt;
    &lt;script&gt;
    function check()
    {
        var card_no = document.getElementById('card_no').value
        var re1 = /^\d{4}\.\d{4}\.\d{4}$/
        var re2 = /^\d{4}\-\d{4}\-\d{4}$/

        var res = re1.test(card_no) || re2.test(card_no)
        if(res)
            alert('Card no. is valid.')
        else
            alert('Card no. is not valid.')			
    }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
Enter Username &lt;input type="text" id="user_name"/&gt;&lt;br&gt;
Enter AADHAR card no. &lt;input type="text" id="card_no"/&gt;&lt;br&gt;
&lt;input type="button" value="Submit" onclick="check()"/&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="check-aadhaar-card-format-2.jpg"></code></pre>
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