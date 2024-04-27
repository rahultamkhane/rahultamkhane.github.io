<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Construct Email ID from Name";
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
          <div class="bread-title"><h2>JavaScript Program to Construct Email ID from Name</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Construct Email ID from Name</h2>
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
    &lt;title&gt;Construct mailID from firstname and surname&lt;/title&gt;
    &lt;script&gt;
    function init()
    {
        var fname = document.getElementById("firstname");
        var mname = document.getElementById("middlename");
        var lname = document.getElementById("surname");

        // Disable input boxes
        var inputs = document.getElementsByTagName("input");
        var labels = document.getElementsByTagName("label");

        console.log(inputs.length);
        for(i=0; i&lt;labels.length; i++)
        {
            inputs[i].style.backgroundColor = "red";
            inputs[i].disabled = true;
            labels[i].style.color="red";
        }

        var msbte_email = getMsbteMailId(fname.value, lname.value);
        alert("Your mailId: " + msbte_email);
    }
    function getMsbteMailId(fn, ln)
    {
        var id = fn.toLowerCase() + "." + ln.toLowerCase() + "@msbte.com";
        return id;
    }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form method="get" action="#"&gt;
&lt;label&gt;Firstname &lt;/label&gt;
&lt;input type="text" id="firstname"/&gt;&lt;br/&gt;
&lt;label&gt;Middlename &lt;/label&gt;
&lt;input type="text" id="middlename"/&gt;&lt;br/&gt;
&lt;label&gt;Surname&lt;/label&gt; 
&lt;input type="text" id="surname"/&gt;&lt;br/&gt;
&lt;input type="button" value="Submit" onclick="init()" /&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="construct-email-id.jpg"></code></pre>
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