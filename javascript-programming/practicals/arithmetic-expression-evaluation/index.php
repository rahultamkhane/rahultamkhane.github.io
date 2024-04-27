<?php 
require("../../../libs/config.php");
$title = "Simple JavaScript with HTML for arithmetic expression evaluation and message printing | ".SITE_NAME;
$description = "Write simple JavaScript with HTML for arithmetic expression evaluation and message printing";
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/header.php");
?>

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/navbar.php");
?>

<div class="container">
  <div class="row">

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/leftbar.php");
?>
    
    <div class="col-sm-8 pl-5 pt-4">
      <div class="container">
        <div class="mydiv">
<h1>Write simple JavaScript with HTML for arithmetic expression evaluation and message printing</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To be able to write simple JavaScript programs.</li>
    <li>To be able to use input and output statements.</li>
    <li>To be able to use arithmetic operators.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>What is JavaScript?</h2>
<ul>
    <li>JavaScript is an interpreted, client-side, event-based, object oriented scripting language&nbsp;that you can use to add dynamic interactivity to your web pages.</li>
    <li>It was designed to add interactivity to HTML pages</li>
    <li>It is an&nbsp;interpreted language&nbsp;(means that scripts execute without preliminary compilation)</li>
    <li>JavaScript scripts are written in plain text, like HTML, XML, Java, PHP and just about any other modern computer code.
    </li>
</ul>
<p></p>
<h2>Uses of JavaScript</h2>
<p>JavaScript can be used to achieve any of the following:</p>
<ul>
    <li>Create special effects with images that give the impression of a button.</li>
    <li>Validate information that users enter into your web forms.</li>
    <li>Open pages in new windows, and customise the appearance of those new windows.</li>
    <li>Detect the capabilities of the user&rsquo;s browser and alter your page&rsquo;s content appropriately.</li>
    <li>Create custom pages &ldquo;on the fly&rdquo; without the need for a server-side language like PHP.</li>
</ul>
<p></p>
<h2>Adding JavaScript to Webpage Using &lt;script&gt; tag</h2>
<p>To use JavaScript in your program just insert &lt;script&gt; &hellip;. &lt;/script&gt; tag either in &lt;HEAD&gt; or &lt;BODY&gt; section of your webpage HTML file.</p>
<p></p>
<p>&lt;script language = &ldquo;javascript&rdquo; type=&ldquo;text/javascript&rdquo;&gt;</p>
<p></p>
<p>&lt;/script&gt;</p>
<h2>Hello World program in JavaScript</h2>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;First JavaScript Program&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script type=&rdquo;text/javascript&rdquo;&gt;</p>
<p>document.write(&ldquo;Hello World!&rdquo;);</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<h2>SAMPLE PROGRAMS</h2>
<h3>1) Develop a JavaScript program to display &lsquo;Hello World!&rsquo; message in alert box.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Message Printing&lt;/title&gt;
</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp; &nbsp;alert(&quot;Hello, world!&quot;);</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" style="width: 466.00px; height: 286.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></p>
<h3>2) Develop a JavaScript program to perform following arithmetic operations: addition, subtraction, multiplication and division.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Arithmetic Operations&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script type=&quot;text/javascript&quot;&gt;</p>
<p>&nbsp; &nbsp;var a = 12;</p>
<p>&nbsp; &nbsp;var b = 34;</p>
<p>&nbsp; &nbsp;var result;</p>
<p>&nbsp; &nbsp;document.write(&quot;Value of a = &quot; + a + &quot; and b = &quot;+ b);</p>
<p>&nbsp; &nbsp;result = a + b;</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br&gt;Addition of a &amp; b = &quot; + result );</p>
<p>&nbsp; &nbsp;result = a - b;</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br&gt;Subtraction of a &amp; b = &quot; + result );</p>
<p>&nbsp; &nbsp;result = a * b;</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br&gt;Multiplication of a &amp; b = &quot; + result );</p>
<p>&nbsp; &nbsp;result = a / b;</p>
<p>&nbsp; &nbsp;document.write(&quot;&lt;br&gt;Division of a &amp; b = &quot; + result );</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<p></p>
</div> <!-- /mydiv -->
      </div> <!-- /container -->	
    </div> <!-- /col-sm-8 -->

<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/rightbar.php");
?>

  </div>	<!-- /row -->

</div> <!-- /container-fluid -->
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/footer.php");
?>