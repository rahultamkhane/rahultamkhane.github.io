<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Email ID from name";
$description = "Write a JavaScript program to create email id after entering first name, middle name and surname.<br><br>


Write html script that displays textboxes for accepting name, middlename, surname of the user and a submit button. Write proper  JavaScript such that when the user clicks on submit button.
i) all texboxes must get disabled and change the color to “red”. and with respective labels.
ii) constructs the mailid as <name>.<surname>@msbte.com and displays mail id as message. (ex. if user enters rajni as name and pathak as surname mailid will be constructed as rajni.pathak@msbte.com) .";
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
          <div class="bread-title"><h2>JavaScript Program to Create Email ID from name</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create Email ID from name</h2>
				<p>Write a JavaScript program to create email id after entering first name, middle name and surname.<br><br>


Write html script that displays textboxes for accepting name, middlename, surname of the user and a submit button. Write proper  JavaScript such that when the user clicks on submit button.
i) all texboxes must get disabled and change the color to “red”. and with respective labels.
ii) constructs the mailid as <name>.<surname>@msbte.com and displays mail id as message. (ex. if user enters rajni as name and pathak as surname mailid will be constructed as rajni.pathak@msbte.com) .</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create MSBTE email id&lt;/title&gt;
    &lt;script&gt;
        function constructMailId()
        {
            var fn = document.getElementById('fname').value
            var sn = document.getElementById('sname').value
            var email = fn.toLowerCase() + "." + sn.toLowerCase() + "@msbte.com"
            alert('Your mailID is: ' + email)
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form name="myform"&gt;
&lt;p&gt;
First name &lt;input type="text" id="fname"/&gt;&lt;br/&gt;
Surname &lt;input type="text" id="sname"/&gt;&lt;br/&gt;
&lt;input type="button" value="Submit" onclick="constructMailId()"/&gt;
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
					<pre><code class="plaintext"><img src="create-email-id-name.jpg"></code></pre>
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