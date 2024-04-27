<?php 
require("../../../libs/config.php");
$title = "JavaScript Program to Insert a String Within a Specific Position in Another String";
$description = "Write a JavaScript program to insert a string within a specific position in another string.";
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
          <div class="bread-title"><h2>JavaScript Program to Insert a String Within a Specific Position in Another String</h2></div>
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
				<h2 class="blog-title">JavaScript Program to Insert a String Within a Specific Position in Another String</h2>
				<p>Write a JavaScript program to insert a string within a specific position in another string.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Insert a string within a specific position in another string&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
    function insert(main_string, ins_string, pos) 
    {
        if(typeof(pos) == "undefined") 
        {
            pos = 0;
        }
        if(typeof(ins_string) == "undefined") 
        {
            ins_string = '';
        }
        return main_string.slice(0, pos) + ins_string + main_string.slice(pos);
    }
    var main_string = "Welcome to JavaScript"
    var ins_string = " the world of "
    var pos = 10
    var final_string = insert(main_string, ins_string, pos)
    document.write("Main String: &lt;b&gt;" + main_string + "&lt;/b&gt;&lt;br/&gt;");
    document.write("String to insert: &lt;b&gt;" + ins_string + "&lt;/b&gt;&lt;br/&gt;");
    document.write("Position of string: &lt;b&gt;" + pos + "&lt;/b&gt;&lt;br/&gt;");
    document.write("Final string: &lt;b&gt;" + final_string + "&lt;/b&gt;");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="insert-string-in-middle.jpg"></code></pre>
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