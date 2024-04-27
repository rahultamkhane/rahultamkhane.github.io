<?php 
require("../../../libs/config.php");
$title = "Develop a webpage for implementing Menus | ".SITE_NAME;
$description = "Develop a webpage for implementing Menus";
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
<h1>Develop a webpage for implementing Menus</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>Create Menus in webpages.</li>
    <li>Develop a JavaScript to create the given menus.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>Menus</h2>
<ul>
    <li>A website menu&nbsp;is a series of linked items that serve in navigating between the different pages or sections of a website.</li>
    <li>There are several kinds of menus, depending on the website&rsquo;s content and design.</li>
    <li>The main types of website menus are:</li>
</ul>
<ol>
    <li><b>Classic navigation menu:&nbsp;</b>This most widespread kind of menu is placed in the website&rsquo;s header, typically as a horizontal list.</li>
    <li><b>Sticky menu:&nbsp;</b>Also known as a fixed or floating menu, this menu stays put as visitors scroll down the site. These are ideal for long-scrolling pages.</li>
    <li><b>Dropdown menu:&nbsp;</b>A menu in which a list of additional items opens up once visitors click on &mdash; or hover over &mdash; one of the menu items. This option is suitable for websites with a lot of content.</li>
    <li><b>Sidebar menu:</b> A list of menu items that&rsquo;s located on the left or right side of a webpage.</li>
</ol>
<h3>1) Pulldown Menu</h3>
<ul>
    <li>A web site is normally a contents a collection of web pages. A site visitor navigates from one page to another.
    </li>
    <li>If a menu of these web pages is created then it becomes easy for a visitor to select appropriate web page.</li>
    <li>The &lt;select&gt;&nbsp;element is used to create a pulldown menu.</li>
    <li>The &lt;option&gt;&nbsp;tags inside the &lt;select&gt;&nbsp;element define the options in the list.</li>
</ul>
<p></p>
<h3>2) Context Menu</h3>
<ul>
    <li>The context menu appears on the web page when user clicks right mouse button on anywhere on the screen.</li>
    <li>For this we have to determine the mouse click position and set the context menu on that position.</li>
</ul>
<p></p>
<h2>Sample Programs</h2>
<p></p>
<h3>1) Develop a JavaScript program to create a simple Pulldown menu.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp;&lt;title&gt;Pulldown Menu Example&lt;/title&gt;</p>
<p>&nbsp;&lt;script&gt;</p>
<p>&nbsp; function displayPage(ch)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp;page = ch.options[ch.selectedIndex].value</p>
<p>&nbsp; &nbsp;if(page != &quot;&quot;)</p>
<p>&nbsp; &nbsp;{</p>
<p>&nbsp; &nbsp; window.location = page</p>
<p>&nbsp; &nbsp;}</p>
<p>&nbsp; }</p>
<p>&nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form name=&#39;form1&#39; action=&quot;#&quot;&gt;</p>
<p>&nbsp;Select your favourite website:</p>
<p>&nbsp;&lt;select name=&quot;mymenu&quot; onchange=&quot;displayPage(this)&quot;&gt;</p>
<p>&nbsp; &lt;option value=&quot;https://www.google.com&quot;&gt;Google&lt;/option&gt;</p>
<p>&nbsp; &lt;option value=&quot;https://www.yahoo.com&quot;&gt;Yahoo&lt;/option&gt;</p>
<p>&nbsp; &lt;option value=&quot;https://www.msbte.org.in&quot;&gt;MSBTE&lt;/option&gt;</p>
<p>&nbsp;&lt;/select&gt;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h3>2) &nbsp;Develop a JavaScript program to create Context Menu.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp;&lt;title&gt;Context Menu Example&lt;/title&gt;</p>
<p>&nbsp;&lt;style&gt;</p>
<p>&nbsp; .menu {</p>
<p>&nbsp; &nbsp;width: 150px;</p>
<p>&nbsp; &nbsp;border-style: solid;</p>
<p>&nbsp; &nbsp;border-width: 1px;</p>
<p>&nbsp; &nbsp;border-color: grey;</p>
<p>&nbsp; &nbsp;position: fixed;</p>
<p>&nbsp; &nbsp;display: none;</p>
<p>&nbsp; }</p>
<p>&nbsp; .menu-item {</p>
<p>&nbsp; &nbsp;height: 20px;</p>
<p>&nbsp; }</p>
<p>&nbsp; .menu-item:hover {</p>
<p>&nbsp; &nbsp;background-color: #6CB5FF;</p>
<p>&nbsp; &nbsp;cursor: pointer;</p>
<p>&nbsp; }</p>
<p>&nbsp;&lt;/style&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;&lt;script&gt;</p>
<p>&nbsp; var menuDisplayed = false</p>
<p>&nbsp; var menuBox = null</p>
<p>&nbsp; window.addEventListener(&quot;contextmenu&quot;, showMenu, false)</p>
<p>&nbsp; window.addEventListener(&quot;click&quot;, hideMenu, false)</p>
<p>&nbsp; </p>
<p>&nbsp; function showMenu()</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp;var left = arguments[0].clientX</p>
<p>&nbsp; &nbsp;var top = arguments[0].clientY</p>
<p>&nbsp; &nbsp;menuBox = window.document.querySelector(&#39;.menu&#39;)</p>
<p>&nbsp; &nbsp;menuBox.style.left = left + &#39;px&#39;</p>
<p>&nbsp; &nbsp;menuBox.style.top = top + &#39;px&#39;</p>
<p>&nbsp; &nbsp;menuBox.style.display = &#39;block&#39;</p>
<p>&nbsp; &nbsp;arguments[0].preventDefault()</p>
<p>&nbsp; &nbsp;menuDisplayed = true</p>
<p>&nbsp; }</p>
<p>&nbsp; function hideMenu()</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp;if(menuDisplayed == true) {</p>
<p>&nbsp; &nbsp; menuBox.style.display = &#39;none&#39;</p>
<p>&nbsp; &nbsp;}</p>
<p>&nbsp; }</p>
<p>&nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;/h2&gt;Right click mouse to view Context Menu&lt;/h2&gt;</p>
<p>&lt;div class=&quot;menu&quot;&gt;</p>
<p>&nbsp;&lt;div class=&quot;menu-item&quot;&gt;Google&lt;/div&gt;</p>
<p>&nbsp;&lt;div class=&quot;menu-item&quot;&gt;Facebook&lt;/div&gt;</p>
<p>&nbsp;&lt;hr&gt;</p>
<p>&nbsp;&lt;div class=&quot;menu-item&quot;&gt;MSN&lt;/div&gt;</p>
<p>&nbsp;&lt;div class=&quot;menu-item&quot;&gt;Bing&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
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