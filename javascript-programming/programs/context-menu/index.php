<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Create Context Menu";
$description = "Write a JavaScript program to create context menu.";
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
          <div class="bread-title"><h2>JavaScript Program to Create Context Menu</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Create Context Menu</h2>
				<p>Write a JavaScript program to create context menu.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Context Menu Example&lt;/title&gt;
    &lt;style&gt;
        .menu {
            width: 150px;
            border-style: solid;
            border-width: 1px;
            border-color: grey;
            position: fixed;
            display: none;
        }
        .menu-item {
            height: 20px;
        }
        .menu-item:hover {
            background-color: #6CB5FF;
            cursor: pointer;
        }
    &lt;/style&gt;
    &lt;script&gt;
        var menuDisplayed = false
        var menuBox = null
        window.addEventListener("contextmenu", showMenu, false)
        window.addEventListener("click", hideMenu, false)

        function showMenu()
        {
            var left = arguments[0].clientX
            var top = arguments[0].clientY
            menuBox = window.document.querySelector('.menu')
            menuBox.style.left = left + 'px'
            menuBox.style.top = top + 'px'
            menuBox.style.display = 'block'
            arguments[0].preventDefault()
            menuDisplayed = true
        }
        function hideMenu()
        {
            if(menuDisplayed == true) 
            {
                menuBox.style.display = 'none'
            }
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;/h2&gt;Right click mouse to view Context Menu&lt;/h2&gt;
&lt;div class="menu"&gt;
&lt;div class="menu-item"&gt;Google&lt;/div&gt;
&lt;div class="menu-item"&gt;Facebook&lt;/div&gt;
&lt;hr&gt;
&lt;div class="menu-item"&gt;MSN&lt;/div&gt;
&lt;div class="menu-item"&gt;Bing&lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="context-menu.jpg"></code></pre>
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