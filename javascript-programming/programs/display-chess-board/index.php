<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Display Chess Board";
$description = "Write a JavaScript program to display chess board.
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
          <div class="bread-title"><h2>JavaScript Program to Display Chess Board</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Display Chess Board</h2>
				<p>Write a JavaScript program to display chess board.
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
    &lt;title&gt;Display Chess Board&lt;/title&gt;
    &lt;style&gt;
        .black {
            width: 30px;
            height: 30px;
            background-color: black;
            display: inline-block;
        }
        .white {
            width: 28px;
            height: 28px;
            background-color: white;
            border: black 1px solid;
            display: inline-block;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h3&gt;Chess Board&lt;/h3&gt;
&lt;script&gt;
    var startWhite = true;
    for(var i=0; i&lt;8; i++) 
    {
        for(var j=0; j&lt;8; j++) 
        {
            if(startWhite)
            {
                if(j%2 == 0)
                    document.write("&lt;div class=\"white\"&gt;&lt;/div&gt;");

                else
                    document.write("&lt;div class=\"black\"&gt;&lt;/div&gt;");
            }
            else
            {
                if(j%2 == 0)
                    document.write("&lt;div class=\"black\"&gt;&lt;/div&gt;");
                else
                    document.write("&lt;div class=\"white\"&gt;&lt;/div&gt;");
            }
        }
        if(i%2 == 0)
            startWhite = false;
        else
            startWhite = true;
        document.write("&lt;br&gt;");
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
					<pre><code class="plaintext"><img src="display-chess-board.jpg"></code></pre>
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