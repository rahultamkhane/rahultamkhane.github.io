<?php 
require("../../../libs/config.php");
$title = "Develop JavaScript to implement strings | ".SITE_NAME;
$description = "Develop JavaScript to implement strings";
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
        <h1>Develop JavaScript to implement strings</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To be able to understand the concept of strings.</li>
    <li>To be able to use different string methods.</li>
</ol>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>JavaScript Strings</h2>
<ul>
    <li>JavaScript Strings&nbsp;are used for storing and manipulating text.</li>
    <li>Strings in JavaScript can be enclosed within either &ldquo;single quotes&rdquo;, &ldquo;double quotes&rdquo;&nbsp;or &ldquo;backticks&rdquo;:</li>
    <li>For example</li>
</ul>
<p>var single_quoted &nbsp;= &#39;Single quoted string&#39;;</p>
<p>var double_quoted = &quot;double-quoted string&quot;;</p>
<p>var backticks = `backticks string`;</p>
<ul>
    <li>Backticks, allow us to embed any expression into the string, by wrapping it in ${&hellip;}:</li>
</ul>
<p>function product(x, y) </p>
<p>{</p>
<p>&nbsp;return x * y;</p>
<p>}</p>
<p>alert(`4 + 6 = ${product(4, 6)}.`); &nbsp; &nbsp;// 4 * 6 = 24</p>
<ul>
    <li>Strings also can be created by using String&rsquo;s fromCharCode()&nbsp;method.</li>
</ul>
<p>String.fromCharCode(104,101,108,108,111) &nbsp; &nbsp; &nbsp;// &quot;hello&quot;</p>
<ul>
    <li>String can also be created using String Object constructor along with new keyword</li>
</ul>
<p>var objString = new String(&quot;I am a String object&quot;);</p>
<p></p>
<h2>String length</h2>
<ul>
    <li>The length property has the string length.</li>
    <li>Note that str.length is a numeric property, not a function. There is no need to add parenthesis after it.</li>
</ul>
<h2>String Methods</h2>
<ol>
    <li><b>str.toLowerCase()</b> : Converts a string to lowercase and returns a new string.</li>
    <li><b>str.toUpperCase()</b> : Converts a string to UPPERCASE and returns a new string.</li>
    <li><b>str.indexOf(substr, [pos])</b> :&nbsp;Returns the index of (the position of) the first occurrence of a specified text in a string. Returns -1 if the text is not found.</li>
    <li><b>str.lastIndexOf(substr, [pos])</b> : Returns the index of the last occurrence of a specified text in a string.</li>
    <li><b>str.includes(substr, pos)</b> : Determines whether substr is found in given string, returns either true or false.
    </li>
    <li><b>str.startsWith(searchbstr)</b> : Determines whether a string begins with the characters of a specified string. Returns true or false depending on result.</li>
    <li><b>str.endsWith(searchstr)</b> : Determines whether a string ends with the characters of a specified string. Returns true or false depending on result.</li>
    <li><b>str.slice(start [, end])</b> :&nbsp;Extracts a part of a string from start&nbsp;to end&nbsp;(not including end) and returns the extracted part in a new string. If a parameter is negative, the position is counted from the end of the string. If you omit
        the second parameter, the method will slice out the rest of the string</li>
    <li><b>str.substring(start [, end])</b> : Similar to slice(), extracts a part of a string between start&nbsp;and end. It cannot accept negative indexes and it allows start to be greater than end. Negative values mean 0</li>
    <li><b>str.substr(start [, length])</b> : Similar to slice(), extracts a part of a string the from start&nbsp;get length&nbsp;characters. If you omit the second parameter, substr() will slice out the rest of the string.</li>
    <li><b>str.trim()</b> :&nbsp;Removes spaces from the beginning and end of the string.</li>
    <li><b>str.search(searchstr)</b> :&nbsp;Searches a string for a specified string and returns the position of the match.
    </li>
    <li><b>str.replace(to, with)</b> : Replaces a specified value with another value in a string.</li>
    <li><b>str.concat(string)</b> : Joins two or more strings. This method can be used instead of the plus operator.</li>
    <li><b>str.charAt(index)</b> : Returns the character at a specified index (position) in a string</li>
    <li><b>str.charCodeAt(index)</b> : Returns the Unicode of the character at a specified index in a string. This method returns a UTF-16 code (an integer between 0 and 65535)</li>
    <li><b>str.split(seperator)</b> : Splits a string into sub strings array. If the separator is &ldquo;&rdquo; (blank or not given), the returned array will be an array of single characters.</li>
</ol>
<h2>Sample Programs</h2>
<h3>1) Develop a program to change the case of string.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp;function toUpper() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var text = document.getElementById(&#39;panel&#39;).innerHTML</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.getElementById(&#39;panel&#39;).innerHTML = text.toUpperCase()</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &nbsp; &nbsp;function toLower() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var text = document.getElementById(&#39;panel&#39;).innerHTML</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.getElementById(&#39;panel&#39;).innerHTML = text.toLowerCase()</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &lt;p id=&quot;panel&quot;&gt;Click on button to change case.&lt;/p&gt;</p>
<p>&nbsp; &lt;input type=&quot;button&quot; value=&quot;UPPERCASE&quot; onclick=&quot;toUpper()&quot; /&gt;</p>
<p>&nbsp; &lt;input type=&quot;button&quot; value=&quot;lowercase&quot; onclick=&quot;toLower()&quot; /&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image2.png" title=""></p>
<h3>2) Develop a JavaScript program to count the number of vowels in a given string.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp;&lt;title&gt;Count vowels in a string&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script&gt;</p>
<p>var str = prompt(&#39;Enter the string&#39;, &#39;&#39;)</p>
<p>var vowels = countVowels(str)</p>
<p>document.write(&quot;Given string: &quot; + str)</p>
<p>document.write(&quot;&lt;br&gt;Number of Vowels: &quot; + vowels)</p>
<p></p>
<p>function countVowels(s)</p>
<p>{</p>
<p>&nbsp;var i=0, count=0</p>
<p>&nbsp;var ch</p>
<p>&nbsp;for(var i=0; i&lt;s.length; i++)</p>
<p>&nbsp;{</p>
<p>&nbsp; ch = s.charAt(i)</p>
<p>&nbsp; if(ch == &#39;a&#39; || ch == &#39;A&#39; || ch == &#39;e&#39; || ch == &#39;E&#39; || ch == &#39;i&#39; || ch == &#39;I&#39; || ch == &#39;o&#39; || ch == &#39;O&#39; || ch == &#39;u&#39; || ch == &#39;U&#39;)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp;count++</p>
<p>&nbsp; }</p>
<p>&nbsp;}</p>
<p>&nbsp;return count</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image3.png" title=""></p>
<h3>3) Develop a program to construct the mailID as &lt;name&gt;.&lt;surname&gt;@domainname.com and display mail ID as message. (Ex. If user enters Rajni as name and Pathak as surname mailID will be constructed as rajni.pathak@domainname.com).
</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp;function constructMailId() {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var fn = document.getElementById(&#39;fname&#39;).value</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var sn = document.getElementById(&#39;sname&#39;).value</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; var email = fn.toLowerCase() + &quot;.&quot; + sn.toLowerCase() + &quot;@domainname.com&quot;
</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(&#39;Your mailID is: &#39; + email)</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &lt;form name=&quot;myform&quot;&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;p&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; First name &lt;input type=&quot;text&quot; id=&quot;fname&quot; /&gt;&lt;br /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; Surname &lt;input type=&quot;text&quot; id=&quot;sname&quot; /&gt;&lt;br /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;input type=&quot;button&quot; value=&quot;Submit&quot; onclick=&quot;constructMailId()&quot; /&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;/p&gt;</p>
<p>&nbsp; &lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
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