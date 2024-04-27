<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Show Popup Menu on Mouse over";
$description = "Write a JavaScript program to Show Popup Menu on Mouse over.";
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
          <div class="bread-title"><h2>JavaScript Program to Show Popup Menu on Mouse over</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Show Popup Menu on Mouse over</h2>
				<p>Write a JavaScript program to Show Popup Menu on Mouse over.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Popup Menu&lt;/title&gt;
    &lt;style&gt;
        .dropdown {
            position:relative;
            display:inline-block;
        }
        .dropbtn {
            background: green;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: 0.8s;
        }
        .dropdown-content a:hover {background-color: gray;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: blue;}
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h2&gt;Pop Up Menu Example&lt;/h2&gt;
&lt;p&gt;Move the mouse over the button to open the dropdown menu.&lt;/p&gt;

&lt;div class="dropdown"&gt;
&lt;button class="dropbtn"&gt;Departments&lt;/button&gt;
&lt;div class="dropdown-content"&gt;
&lt;a href=""&gt;Computer Engineering&lt;/a&gt;
&lt;a href=""&gt;Electronics and Telecom Engineering&lt;/a&gt;
&lt;a href=""&gt;Electrical Engineering&lt;/a&gt;
&lt;a href=""&gt;Mechanical Engineering&lt;/a&gt;
&lt;a href=""&gt;Civil Engineering&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;/body&gt;

&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="show-popup-menu-mouse-over.jpg"></code></pre>
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