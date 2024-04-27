<?php 
require("../../../libs/config.php");
$title = "Create a webpage to implement Form Events (Part-I) | ".SITE_NAME;
$description = "Create a webpage to implement Form Events (Part-I)";
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
<h1>Create a webpage to implement Form Events (Part-I)</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To understand basic concepts of Forms in JavaScript.</li>
    <li>To learn Events and Event Handling in JavaScript.</li>
    <li>Write JavaScript to design a form to accept input values for the given problem.</li>
    <li>Use JavaScript to implement form events to solve the given problem.</li>
    <li>Develop JavaScript to dynamically assign specified attribute value to the given form control.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>HTML Form Events</h2>
<ul>
    <li>When JavaScript is used in HTML pages, JavaScript can &ldquo;react&rdquo; on these events.</li>
    <li>An HTML event can be something the browser does, or something a user does.</li>
    <li>The simple example of an event is a user clicking the mouse or pressing a key on the keyboard.</li>
    <li>Some examples of HTML events:</li>
</ul>
<ul>
    <li>An HTML web page has finished loading</li>
    <li>An HTML input field was changed</li>
    <li>An HTML button was clicked</li>
</ul>
<ul>
    <li>When events happen, we may want to do something. JavaScript lets execute code when events are detected.</li>
</ul>
<p></p>
<h3>Example of HTML Form Event</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp;&lt;script type=&quot;text/javascript&quot;&gt;</p>
<p>&nbsp; &nbsp; &nbsp; function sayHello() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;alert(&quot;Hello World!&quot;)</p>
<p>&nbsp; &nbsp; &nbsp; }</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &nbsp;&lt;p&gt;Click the button to see result&lt;/p&gt;</p>
<p>&nbsp; &nbsp;&lt;form&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type=&quot;button&quot; onclick=&quot;sayHello()&quot; value=&quot;Say Hello&quot; /&gt;
</p>
<p>&nbsp; &nbsp;&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" title=""></p>
<p></p>
<h3>Common HTML Events</h3>
<ul>
    <li>onchange :&nbsp;An HTML element has been changed</li>
    <li>onclick : The user clicks an HTML element</li>
    <li>onmouseover :&nbsp;The user moves the mouse over an HTML element</li>
    <li>onmouseout :&nbsp;The user moves the mouse away from an HTML element</li>
    <li>onkeydown :&nbsp;The user pushes a keyboard key</li>
    <li>onload :&nbsp;The browser has finished loading the page</li>
</ul>
<h2>Sample Program</h2>
<h3>1) Write program to add click, mouseover and mouseout events to a webpage using JavaScript.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &nbsp;&lt;button id=&quot;btn&quot;&gt;Click here&lt;/button&gt;</p>
<p>&nbsp; &nbsp;&lt;p id=&quot;para&quot; onmouseover=&quot;mouseOver()&quot; onmouseout=&quot;mouseOut()&quot;&gt;Hover over this Text !&lt;/p&gt;</p>
<p>&nbsp; &nbsp;&lt;b id=&quot;output&quot;&gt;&lt;/b&gt;</p>
<p>&nbsp; &nbsp;&lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp; var x = document.getElementById(&quot;btn&quot;);</p>
<p>x.addEventListener(&quot;click&quot;, btnClick);</p>
<p>function mouseOver() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;document.getElementById(&quot;output&quot;).innerHTML += &quot;MouseOver Event&quot; + &quot;&lt;br&gt;&quot;;</p>
<p>&nbsp; &nbsp; &nbsp; }</p>
<p>function mouseOut() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;document.getElementById(&quot;output&quot;).innerHTML += &quot;MouseOut Event&quot; + &quot;&lt;br&gt;&quot;;</p>
<p>&nbsp; &nbsp; &nbsp; }</p>
<p>function btnClick() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;document.getElementById(&quot;output&quot;).innerHTML += &quot;Click Event&quot; + &quot;&lt;br&gt;&quot;;
</p>
<p>&nbsp; &nbsp; &nbsp; } </p>
<p>&nbsp; &nbsp;&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h3>2) Write HTML Script that displays three radio buttons red, green, blue. Write proper JavaScript such that when the user clicks on radio button the background color of webpage will get change accordingly.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp;function changeColor(color)</p>
<p>&nbsp; &nbsp; &nbsp;{</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var panel = document.getElementById(&#39;panel&#39;)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.body.style.backgroundColor = color</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; panel.innerHTML = &quot;Background color is set to: &quot; + color.toUpperCase()</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body onload=&quot;changeColor(&#39;red&#39;)&quot;&gt;</p>
<p>&nbsp; &lt;p&gt;Select option to change background color of page&lt;/p&gt;</p>
<p>&nbsp; &lt;form name=&quot;myform&quot;&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;radio&quot; name=&quot;color&quot; value=&quot;red&quot; onchange=&quot;changeColor(this.value)&quot; checked=&quot;false&quot;&gt;RED&lt;br /&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;radio&quot; name=&quot;color&quot; value=&quot;green&quot; onchange=&quot;changeColor(this.value)&quot;&gt;GREEN&lt;br /&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;input type=&quot;radio&quot; name=&quot;color&quot; value=&quot;blue&quot; onchange=&quot;changeColor(this.value)&quot;&gt;BLUE&lt;br /&gt;</p>
<p>&nbsp; &lt;/form&gt;</p>
<p>&nbsp; &lt;p id=&quot;panel&quot;&gt;&lt;/p&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p><img alt="" src="images/image4.png" title=""></p>
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