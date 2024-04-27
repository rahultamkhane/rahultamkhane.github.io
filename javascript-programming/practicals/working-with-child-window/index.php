<?php 
require("../../../libs/config.php");
$title = "Develop a webpage for placing the window on the screen and working with child window | ".SITE_NAME;
$description = "Develop a webpage for placing the window on the screen and working with child window";
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
<h1>Develop a webpage for placing the window on the screen and working with child window</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To write JavaScript to manipulate the specified attributes of window object in the given manner.</li>
    <li>Develop JavaScript to create and manipulate child windows.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>Window Object</h2>
<ul>
    <li>JavaScript&lsquo;s &ldquo;window&rdquo; object represents the browser window or, the frame that a document is displayed in.</li>
    <li>The properties of a particular instance of Window might include its size, the buttons, scrollbars, browser frame, position, and so on.</li>
    <li>The methods of the Window object include the creation and destruction of generic windows and the handling of special case windows such as alert, confirmation, and prompt dialogs.</li>
</ul>
<h3>Opening and Closing Window</h3>
<ul>
    <li>The Window object methods open( )&nbsp;and close( )&nbsp;are used to create and destroy a window, respectively.</li>
    <li>When you open a window, you can set its URL, name, size, buttons, and other attributes, such as whether or not the window can be resized.</li>
    <li>Syntax</li>
</ul>
<p>window.open (url, name, features)</p>
<ul>
    <li>Where,<br>- url is a URL that indicates the document to load into the window.<br>- name is the name for the window (which is useful for referencing later on using the target attribute of HTML links).<br>- features is a comma-delimited string that
        lists the features of the window.</li>
    <li>Example</li>
</ul>
<p>mywindow = open(&quot;http://www.yahoo.com&quot;, &quot;yahoo&quot;, &quot;height=300, width=200, scrollbars=yes&quot;)</p>
<ul>
    <li>This would open a window to Yahoo with height 300 pixels, width 200 pixels, and scrollbars, as shown here:</li>
</ul>
<p><img alt="" src="images/image5.png" title=""></p>
<p></p>
<h3>Program: Write a JavaScript program to create a new child window</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Open new window&lt;/title&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp;function openWindow()</p>
<p>&nbsp;{</p>
<p>&nbsp; myWindow = window.open(&#39;hello.html&#39;, &#39;My Window&#39;, &#39;top=100,</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;left=100, width=250, height=100,status=1&#39;)</p>
<p>&nbsp;}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form action=&quot;#&quot;&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Open Window&quot; onclick=&quot;openWindow()&quot;/&gt;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p></p>
<h3>Window Features</h3>
<p></p>
<p><img alt="" src="images/image4.png" title=""></p>
<p></p>
<h3>Writing Content to Newly Created Window</h3>
<ul>
    <li>We can write content to newly created windows once they are created either using the standard document.write()&nbsp;method or potentially even manipulate the window with DOM methods.</li>
    <li>Consider the script here,</li>
</ul>
<p>var myWindow = open(&#39;&#39;,&#39;mywin&#39;, &#39;height=300, width=300&#39;);</p>
<p>myWindow.document.write(&#39;Hi there.&#39;);</p>
<p>myWindow.document.write(&#39;This is my new window&#39;);</p>
<p>myWindow.document.close();</p>
<p>myWindow.focus();</p>
<ul>
    <li>It is possible to write out HTML to the newly created window dynamically, so you could use something like</li>
</ul>
<p>myWindow.document.writeln(&quot;&lt;html&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;head&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;title&gt;New Window&lt;/title&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;/head&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;body&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;h1&gt;I am Newly Created Window&lt;/h1&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;/body&gt;&quot;);</p>
<p>myWindow.document.writeln(&quot;&lt;/html&gt;&quot;);</p>
<p></p>
<h3>Program: Write a JavaScript program to write content on child window</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function init()</p>
<p>{</p>
<p>&nbsp;var win = window.open(&quot;&quot;, &quot;MyWindow&quot;, &quot;width=100, height=100&quot;)</p>
<p>&nbsp;win.document.write(&quot;&lt;h3&gt;Hello World!!!&lt;/h3&gt;&quot;)</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body onload=&quot;init()&quot;&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h2>Sample Program</h2>
<p></p>
<h3>Develop a program to create and open multiple windows</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function createWindows()</p>
<p>{</p>
<p>&nbsp;for(i=0; i&lt;5; i++)</p>
<p>&nbsp;{</p>
<p>&nbsp; var mywin = window.open(&quot;&quot;, &quot;win&quot;+i, &quot;width=100, height=100&quot;)</p>
<p>&nbsp;}</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Create Windows&quot; onclick=&quot;createWindows()&quot;/&gt;</p>
<p>&lt;/form&gt;</p>
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