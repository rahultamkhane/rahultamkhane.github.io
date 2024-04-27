<?php 
require("../../../libs/config.php");
$title = "Develop a webpage for implementing Slideshow and Banner | ".SITE_NAME;
$description = "Develop a webpage for implementing Slideshow and Banner";
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
<h1>Develop a webpage for implementing Slideshow and Banner</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>Develop JavaScript to create the given banner.</li>
    <li>Develop JavaScript to create the given slide show.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>Banner Advertisements</h2>
<ul>
    <li>The banner advertisement is the hallmark of every commercial web page.</li>
    <li>It is typically positioned near the top of the web page, and its purpose is to get the visitor&rsquo;s attention.
    </li>
    <li>All banner advertisements are in a file format such as a GIF, JPG, TIFF, or other common graphic file formats.
    </li>
    <li>Some are Flash movies that require the visitor to have a browser that includes a Flash plug-in.</li>
    <li>Following are the steps to insert banner advertisement in webpage.</li>
</ul>
<ol>
    <li>Create banner advertisement using a graphics tool such as PhototShop, Paint, etc.</li>
    <li>Create an &lt;img&gt; element in web page with height and width to display banner advertisements.</li>
    <li>Build JavaScript that loads and display banner advertisements.</li>
</ol>
<h2 class="c6 c25" id="h.oervdjpyeoq"></h2>
<h2>SlideShow</h2>
<ul>
    <li>A slideshow is similar in concept to a banner advertisement in that a slideshow rotates multiple images on the web page.</li>
    <li>A slideshow gives the visitor the ability to change the image that&rsquo;s displayed: the visitor can click the Forward button to see the next image and the Back button to see the previous image.</li>
    <li>Creating a slideshow for your web page is a straightforward process.</li>
    <li>The &lt;body&gt; tag contains an &lt;img&gt; tag that is used to display the image on the web page.</li>
</ul>
<p></p>
<h2>Sample Programs</h2>
<p></p>
<h3>1) Develop a JavaScript program to create a simple banner advertisement.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp;&lt;title&gt;Banner Advertisements&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body bgcolor=&quot;#EEEEEE&quot;&gt;</p>
<p>&nbsp;&lt;a href=&quot;https://www.javatutsweb.com&quot;&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;img src=&quot;java-programming-ad.jpg&quot;/&gt;</p>
<p>&nbsp;&lt;/a&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h3>2)&nbsp;Develop a JavaScript program to create a slideshow with the group of four images, also simulate the next and previous transition between slides in your JavaScript.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp; &lt;title&gt;Image SlideShow&lt;/title&gt;</p>
<p>&nbsp; &nbsp; &lt;script&gt;</p>
<p>&nbsp; &nbsp; var images = [&quot;01.jpg&quot;, &quot;02.jpg&quot;, &quot;03.jpg&quot;, &quot;04.jpg&quot;, &quot;05.jpg&quot;];
</p>
<p>&nbsp; &nbsp; var count = 0;</p>
<p>&nbsp; &nbsp; function previousImage() </p>
<p>&nbsp; &nbsp; {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if(count!=0)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; count--;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var id = document.getElementById(&quot;imageId&quot;);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; id.src = &quot;images/&quot; + images[count];</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; function nextImage() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if(count!=4)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; count++;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var id = document.getElementById(&quot;imageId&quot;);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; id.src = &quot;images/&quot; + images[count];</p>
<p>&nbsp; &nbsp; }</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;center&gt;</p>
<p>&nbsp; &nbsp; &lt;img id=&quot;imageId&quot; src=&quot;images/01.jpg&quot; width=&quot;300&quot; height=&quot;200&quot;/&gt; &nbsp;</p>
<p>&nbsp; &nbsp; &lt;br/&gt;</p>
<p>&nbsp; &nbsp; &lt;hr&gt;</p>
<p>&nbsp; &nbsp; &lt;input type=&quot;button&quot; value=&quot;&lt; Prev Image&quot; onclick=&quot;previousImage()&quot;/&gt;
</p>
<p>&nbsp; &nbsp; &lt;input type=&quot;button&quot; value=&quot;Next Image &gt;&quot; onclick=&quot;nextImage()&quot;/&gt;
</p>
<p>&lt;/center&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" title=""></p>
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