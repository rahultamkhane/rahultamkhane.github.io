<?php 
require("../../../libs/config.php");
$title = "Creating session and persistent cookies. Observe the effects with Browser cookie settings | ".SITE_NAME;
$description = "Develop a webpage for creating session and persistent cookies. Observe the effects with Browser cookie settings";
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
<h1>Develop a webpage for creating session and persistent cookies. Observe the effects with Browser cookie settings</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To learn concepts of Cookies.</li>
    <li>To create cookie based on the given problem.</li>
    <li>Develop JavaScript to manage a cookie in the given manner.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>Cookies Basics</h2>
<ul>
    <li>A cookie&nbsp;is a small piece of information that a web site writes to user&rsquo;s hard disk when he visit the site.</li>
    <li>Cookies let you store user information in web pages.</li>
    <li>Cookies are data, stored in small text files, on your computer.</li>
    <li>When a web server has sent a web page to a browser, the connection is shut down, and the server forgets everything about the user.</li>
    <li>Cookies were invented to solve the problem &ldquo;how to remember information about the user&rdquo;:</li>
</ul>
<ul>
    <li>When a user visits a web page, his/her name can be stored in a cookie.</li>
    <li>Next time the user visits the page, the cookie &ldquo;remembers&rdquo; his/her name.</li>
</ul>
<ul>
    <li>A JavaScript can be used to create cookies whenever someone visits the web page that contains the script.</li>
    <li>A JavaScript can also be used to read cookies stored on a user&rsquo;s computer, and it uses the information stored in a cookie to personalize the web page that a user visits.</li>
    <li>The text of a cookie must contain a name-value pair, which is a name and value of the information.</li>
    <li>There are two types of Cookies:<br>1) Session cookies<br>2) Persistent cookies</li>
</ul>
<p></p>
<h2>1) Session Cookies</h2>
<ul>
    <li>Also also known as an in-memory&nbsp;cookie</li>
    <li>It resides in memory for the length of the browser session.</li>
    <li>A browser session begins when the user starts the browser and ends when the user exits the browser.</li>
    <li>Even if the user surfs to another web site, the cookie remains in memory.</li>
    <li>Session cookie is automatically deleted when the user exits the browser application.</li>
</ul>
<p></p>
<h2>2) Persistent Cookies</h2>
<ul>
    <li>Also known as transient cookie.</li>
    <li>A persistent cookie is a cookie that is assigned an expiration date.</li>
    <li>It is written to the computer&rsquo;s hard disk and remains there until the expiration date has been reached; then it&rsquo;s deleted.</li>
</ul>
<h2>Sample Program</h2>
<p></p>
<h3>1) Write a JavaScript program to create a cookie.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function createCookie()</p>
<p>{</p>
<p>&nbsp;var x = document.getElementById(&#39;myname&#39;).value</p>
<p>&nbsp;document.cookie = &quot;name=&quot; + x + &quot;;&quot;</p>
<p>&nbsp;alert(&quot;Cookie Written..&quot;)</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>Enter ur name &lt;input type=&quot;text&quot; id=&quot;myname&quot; onchange=&quot;createCookie()&quot;/&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image4.png" title=""></p>
<p></p>
<h3>2) Write a program to create a persistent cookie</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script&gt;</p>
<p>var date = new Date();</p>
<p>var days=2;</p>
<p>date.setTime(date.getTime()+(days*24*60*60*1000));</p>
<p>var expires = date.toGMTString();</p>
<p>document.cookie = &quot;user=Rahul; expires=&quot;+ expires + &quot;;&quot;</p>
<p>alert(&quot;Cookie Created\n&quot;+document.cookie)</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p></p>
<h3>3) Develop a program to create and read a cookie</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function setCookie()</p>
<p>{</p>
<p>&nbsp;var name = document.getElementById(&#39;person&#39;).value</p>
<p>&nbsp;document.cookie = &quot;name=&quot; + name + &quot;;&quot;</p>
<p>&nbsp;alert(&quot;Cookie Created&quot;)</p>
<p>}</p>
<p>function readCookie()</p>
<p>{</p>
<p>&nbsp;var cookie = document.cookie</p>
<p>&nbsp;var panel = document.getElementById(&#39;panel&#39;)</p>
<p>&nbsp;if(cookie == &quot;&quot;)</p>
<p>&nbsp; panel.innerHTML = &quot;Cookie not found&quot;</p>
<p>&nbsp;else</p>
<p>&nbsp; panel.innerHTML = cookie</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form name=&quot;myForm&quot;&gt;</p>
<p>Enter your name &lt;input type=&quot;text&quot; id=&quot;person&quot;/&gt;&lt;br/&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Set Cookie&quot; onclick=&quot;setCookie()&quot;/&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Read Cookie&quot; onclick=&quot;readCookie()&quot;/&gt;</p>
<p>&lt;p id=&quot;panel&quot;&gt;&lt;/p&gt;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" title=""></p>
<p></p>
<h3>4) Write a webpage that displays a form that contains an input for Username and Password. User is prompted to enter the input and password and password becomes value of the cookie. Write the JavaScript function for storing the cookie. It gets executed when the password changes</h3> 
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function storeCookie()</p>
<p>{</p>
<p>&nbsp;var pwd = document.getElementById(&#39;pwd&#39;).value</p>
<p>&nbsp;document.cookie = &quot;Password=&quot; + pwd + &quot;;&quot;</p>
<p>&nbsp;alert(&quot;Cookie Stored\n&quot; + document.cookie)</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form name=&quot;myForm&quot;&gt;</p>
<p>Enter Username &lt;input type=&quot;text&quot; id=&quot;uname&quot;/&gt;&lt;br/&gt;</p>
<p>Enter Password &lt;input type=&quot;password&quot; id=&quot;pwd&quot;/&gt;&lt;br/&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Submit&quot; onclick=&quot;storeCookie()&quot;/&gt;</p>
<p>&lt;p id=&quot;panel&quot;&gt;&lt;/p&gt;</p>
<p>&lt;/form&gt;</p>
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