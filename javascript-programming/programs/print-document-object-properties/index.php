<?php 
require("../../../libs/config.php");
$title = "JavaScript program to display all properties of document object";
$description = "Write a JavaScript program to display all properties of 'document' object.";
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
          <div class="bread-title"><h2>JavaScript program to display all properties of document object</h2></div>
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
				<h2 class="blog-title">JavaScript program to display all properties of document object</h2>
				<p>Write a JavaScript program to display all properties of "document" object.</p>
				
				<br>
				<?php 
					include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
				?>
				<br>
				<h5>Source Code</h5>
				<div id="code" class="source-code">
					<pre><code class="html">&lt;HTML&gt;
&lt;HEAD&gt;
    &lt;TITLE&gt;Document Properties&lt;/TITLE&gt;
&lt;/HEAD&gt;
&lt;BODY&gt;
&lt;SCRIPT type="text/javascript"&gt;
    document.fgColor = "green";      // sets text color
    document.bgColor = "yellow";     // background color
    document.title = "Chakde India"; // change title
    document.linkColor = "navy";     // hyperlinks color
    document.alinkColor = "red";     // active links
    document.vlinkColor = "lime";    // visited hyperlinks
    document.write("&lt;BR&gt;Do you know about JavaScript?");
    document.write("&lt;BR&gt; &lt;A href=\"yes.html\"&gt; Yes &lt;/A&gt;");
    document.write("&lt;BR&gt; &lt;A href=\"no.html\"&gt; No &lt;/A&gt;");
    document.write("&lt;BR&gt;Title of current document: " + document.title);
    document.write("&lt;BR&gt;Height of current document: " + document.height);
    document.write("&lt;BR&gt;Width of current document: " + document.width);
    document.write("&lt;BR&gt; URL of current document is: " + document.URL);
    
    //Use of document.links to list of all the hyperlinks
    document.write("&lt;BR&gt;&lt;B&gt;The List of Links in current document&lt;/B&gt;");
    var links = document.links;
    for(var i = 0; i &lt; links.length; i++)
    {
        document.write("&lt;BR&gt;"+ document.links[i]);
    }
&lt;/SCRIPT&gt;
&lt;/BODY&gt;
&lt;/HTML&gt;
</code></pre>
				</div> <!--/ End source-code -->
				</div> <!--/ End blog-detail-->
				
			</div> <!--/ End blog-single-main -->
		

				<h5 class="pt-3">Output</h5>
				<div class="output">
					<pre><code class="plaintext"><img src="print-document-object-properties.jpg"></code></pre>
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