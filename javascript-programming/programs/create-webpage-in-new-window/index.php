<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create User Login Form on Newly Created Window";
$description = "Write a JavaScript program to create user login form on newly created window.";
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
          <div class="bread-title"><h2>JavaScript Program to Create User Login Form on Newly Created Window</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create User Login Form on Newly Created Window</h2>
				<p>Write a JavaScript program to create user login form on newly created window.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Create user login form on newly created window&lt;/title&gt;
    &lt;script&gt;
        function createWebPage() 
        {
            var mywin = window.open('', 'myWindow', 'width=300, height=200');
            mywin.document.write('&lt;html&gt;');
            mywin.document.write('&lt;head&gt;');
            mywin.document.write('&lt;title&gt;Web Page newly created&lt;/title&gt;');
            mywin.document.write('&lt;/head&gt;');
            mywin.document.write('&lt;body&gt;');
            mywin.document.write('&lt;h1&gt;User Login Form&lt;/h1&gt;');
            mywin.document.write('&lt;form action="" method="post"&gt;');
            mywin.document.write('User name &lt;input type="text" name="uname"/&gt;&lt;br/&gt;');
            mywin.document.write('Password &lt;input type="password" name="pwd"/&gt;&lt;br/&gt;');
            mywin.document.write('&lt;input type="submit" value="SUBMIT"/&gt;&lt;br/&gt;');
            mywin.document.write('&lt;/form&gt;');
            mywin.document.write('&lt;/body&gt;');
            mywin.document.write('&lt;/html&gt;');
        }
    &lt;/script&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;form&gt;
    &lt;input type="button" value="Create Web Page" onclick="createWebPage()"/&gt;
&lt;/form&gt;
&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="create-webpage-in-new-window.jpg"></code></pre>
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