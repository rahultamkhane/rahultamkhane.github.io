<?php 
require("../../../libs/config.php");
$title = "Create a webpage to implement Form Events (Part-II) | ".SITE_NAME;
$description = "Create a webpage to implement Form Events (Part-II)";
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
<h1>Create a webpage to implement Form Events (Part-II)</h1>
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
<h2>Mouse Events</h2>
<ul>
    <li>Mouse events are used to capture the interactions made by the user using the mouse.</li>
    <li>Such events may come not only from &ldquo;mouse devices&rdquo;, but are also from other devices, such as phones and tablets.</li>
</ul>
<h2>Mouse Event Types</h2>
<ul>
    <li><b>mousedown/mouseup&nbsp;:</b> Mouse button is clicked/released over an element.</li>
    <li><b>mouseover/mouseout&nbsp;:</b> Mouse pointer comes over/out from an element.</li>
    <li><b>mousemove&nbsp;:</b> Every mouse move over an element triggers that event.</li>
    <li><b>click&nbsp;:</b> Triggers after mousedown and then mouseup over the same element if the left mouse button was used.
    </li>
    <li><b>dblclick&nbsp;:</b> Triggers after two clicks on the same element within a short timeframe. Rarely used nowadays.
    </li>
    <li><b>contextmenu&nbsp;:</b> Triggers when the right mouse button is pressed. There are other ways to open a context menu, e.g. using a special keyboard key, it triggers in that case also, so it&rsquo;s not exactly the mouse event.
    </li>
</ul>
<h3>Example of Mouse Events</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Mouse Events&lt;/title&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp;function init()</p>
<p>&nbsp;{</p>
<p>&nbsp; var panel = document.getElementById(&#39;panel&#39;)</p>
<p>&nbsp; var btn = document.getElementById(&#39;btn&#39;)</p>
<p>&nbsp;</p>
<p>&nbsp; btn.addEventListener(&quot;dblclick&quot;, dblClick)</p>
<p>&nbsp; btn.addEventListener(&quot;mousedown&quot;, mouseDown)</p>
<p>&nbsp; btn.addEventListener(&quot;mouseup&quot;, mouseUp)</p>
<p>&nbsp; btn.addEventListener(&quot;mouseover&quot;, mouseOver)</p>
<p>&nbsp; btn.addEventListener(&quot;mouseout&quot;, mouseOut)</p>
<p>&nbsp;}</p>
<p></p>
<p>&nbsp;function click()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse clicked&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p></p>
<p>&nbsp;function dblClick()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse double clicked&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function mouseDown()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse down&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function mouseUp()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse up&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function mouseOver()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse over&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function mouseOut()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse out&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function mouseMove()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;Mouse moved&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body onload=&quot;init()&quot;&gt;</p>
<p>&lt;input type=&quot;button&quot; id=&quot;btn&quot; value=&quot;Click Me&quot; onclick=&quot;click()&quot;</p>
<p>&nbsp; &nbsp; &nbsp; onmousemove=&quot;mouseMove&quot;/&gt;</p>
<p>&lt;h3&gt;Mouse events performed are&lt;/h3&gt;</p>
<p>&lt;p id=&quot;panel&quot;&gt;&lt;/p&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p></p>
<h2>Key Events</h2>
<ul>
    <li>The keyboard events are the events that occur when the user interacts using the keyboard.</li>
    <li>The keydown events happens when a key is pressed down, and then keyup when it&rsquo;s released.</li>
    <li>The event.key property of the event object allows to get the character , while the event.code&nbsp;property of the event object allows to get the &ldquo;physical key code&rdquo;.</li>
</ul>
<p><img alt="" src="images/image4.png" title=""></p>
<ul>
    <li>For instance, the same key Z can be pressed with or without Shift. That gives us two different characters: lowercase z and uppercase Z.</li>
    <li>The event.key is exactly the character, and it will be different. You can visit <a href="https://javascript.info/keyboard-events">https://javascript.info/keyboard-events</a>&nbsp;for more details</li>
</ul>
<h3>Key Event Types</h3>
<ul>
    <li><b>onkeydown : </b>When user presses the key on the keyboard (this happens first).</li>
    <li><b>onkeypress : </b>The user presses a key (this happens after onkeydown)</li>
    <li><b>onkeyup : </b>The user releases a key that was down (this happens last).</li>
</ul>
<h4>Example of KeyEvents</h4>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Key Events&lt;/title&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp;function init()</p>
<p>&nbsp;{</p>
<p>&nbsp; var panel = document.getElementById(&#39;panel&#39;)</p>
<p>&nbsp; document.addEventListener(&quot;keydown&quot;, keydown)</p>
<p>&nbsp; document.addEventListener(&quot;keypress&quot;, keypress)</p>
<p>&nbsp; document.addEventListener(&quot;keyup&quot;, keyup)</p>
<p>&nbsp;}</p>
<p></p>
<p>&nbsp;function keydown()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML = &quot;Key down&lt;br/&gt;&quot;</p>
<p>&nbsp;}</p>
<p>&nbsp;function keypress(e)</p>
<p>&nbsp;{</p>
<p>&nbsp; var c = (window.event) ? e.keyCode : e.which</p>
<p>&nbsp; panel.innerHTML += &quot;Key pressed: &quot; + String.fromCharCode(c)</p>
<p>&nbsp;}</p>
<p>&nbsp;function keyup()</p>
<p>&nbsp;{</p>
<p>&nbsp; panel.innerHTML += &quot;&lt;br/&gt;Key up&quot;</p>
<p>&nbsp;}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body onload=&quot;init()&quot;&gt;</p>
<p>&lt;p id=&quot;panel&quot;&gt;&lt;/p&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<h2>Sample Program</h2>
<h3>Develop a JavaScript program for working with form events.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;title&gt;Example: Working with form Events&lt;/title&gt;</p>
<p>&nbsp; &lt;style type=&quot;text/css&quot;&gt;</p>
<p>&nbsp; &nbsp; &nbsp;p {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; font-family: Verdana;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; background: #FA8B7C;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; color: #fff;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; padding: 10px;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; border: 4px solid #555;</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &lt;/style&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &lt;form&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;p&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label for=&quot;name&quot;&gt; Name:</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input autofocus id=&quot;name&quot; name=&quot;name&quot; /&gt;&lt;/label&gt;
</p>
<p>&nbsp; &nbsp; &nbsp;&lt;/p&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;p&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label for=&quot;nick&quot;&gt; Nickname:</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input id=&quot;nick&quot; name=&quot;nick&quot; /&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;/p&gt;</p>
<p>&lt;button type=&quot;submit&quot;&gt;Submit&lt;/button&gt;</p>
<p>&nbsp; &lt;/form&gt;</p>
<p>&lt;span id=&quot;output&quot;&gt;&lt;/span&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp; var items = document.getElementsByTagName(&quot;input&quot;);</p>
<p>&nbsp; for (var i = 0; i &lt; items.length; i++) {</p>
<p>&nbsp; &nbsp; &nbsp;items[i].onkeyup = keyboardEventHandler;</p>
<p>&nbsp; }</p>
<p>function keyboardEventHandler(e) {</p>
<p>&nbsp; &nbsp; &nbsp;document.getElementById(&quot;output&quot;).innerHTML = &quot;Key pressed is: &quot; +</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; e.keyCode + &quot; Char:&quot; + String.fromCharCode(e.keyCode);</p>
<p>&nbsp; }</p>
<p>&lt;/script&gt;</p>
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