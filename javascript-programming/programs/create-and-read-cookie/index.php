<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create (or Set) a Cookie and Read a Created Cookie";
$description = "Write a JavaScript program to create (or set) a cookie and read a created cookie.";
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
          <div class="bread-title"><h2>JavaScript Program to Create (or Set) a Cookie and Read a Created Cookie</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create (or Set) a Cookie and Read a Created Cookie</h2>
				<p>Write a JavaScript program to create (or set) a cookie and read a created cookie.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create and read cookie&lt;/title&gt;
    &lt;script&gt;
        function setCookie() 
        {
            var name = document.getElementById('person').value
            document.cookie = "name=" + name + ";"
            alert("Cookie Created")
        }
        function readCookie() 
        {
            var cookie = document.cookie
            var panel = document.getElementById('panel')

            if(cookie == "")
                panel.innerHTML = "Cookie not found"
            else
                panel.innerHTML = cookie
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;form name="myForm"&gt;
    Enter your name &lt;input type="text" id="person"/&gt;&lt;br/&gt;
    &lt;input type="button" value="Set Cookie" onclick="setCookie()"/&gt;
    &lt;input type="button" value="Read Cookie" onclick="readCookie()"/&gt;
&lt;/form&gt;
&lt;p id="panel"&gt;&lt;/p&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="create-and-read-cookie.jpg"></code></pre>
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