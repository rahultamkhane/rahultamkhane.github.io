<?php 
require("../../../libs/config.php");
$title = "Develop a webpage for validation of form fields using regular expressions | ".SITE_NAME;
$description = "Develop a webpage for validation of form fields using regular expressions";
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
<h1>Develop a webpage for validation of form fields using regular expressions</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>Create interactive webpage using regular expressions for validations.</li>
    <li>Compare relevant regular expression for the given character pattern search.</li>
    <li>Develop JavaScript to implement validations using the given regular expression.</li>
</ol>
<p></p>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>

<h2>Regular Expression</h2>
<ul>
    <li>A Regular Expression&nbsp;is an object that describes a pattern of characters.</li>
    <li>A Regular Expression (also &ldquo;regexp&rdquo;, or just &ldquo;reg&rdquo;) is a sequence of characters that forms a search pattern.</li>
    <li>They are useful for searching and replacing the characters in the string that match a pattern.</li>
    <li>For example, regular expressions can be used to validate form fields like email addresses and phone numbers, to perform all types of text search and text replace operations, for counting specific characters in a string.</li>
    <li>A regular expression is very similar to a mathematical expression, except it tells the browser how to manipulate text rather than numbers by using special symbols as operators.</li>
</ul>
<h3>Creating Regular Expression</h3>
<ul>
    <li>A regular expression could be defined by using two ways:</li>
</ul>
<h4>1) Using RegExp constructor</h4>
<p>Syntax &nbsp; &nbsp;-&nbsp; &nbsp; &nbsp;var pattern = new RegExp(pattern [, flags] );</p>
<p>Example &nbsp; - &nbsp; var re1 = new RegExp(&quot;xyz&quot;, &quot;i&quot;);</p>
<p></p>
<h4>2) Using literal</h4>
<p>Syntax &nbsp; &nbsp;-&nbsp; &nbsp; &nbsp;var pattern = /pattern/flags;</p>
<p>Example &nbsp; - &nbsp; var re2 = /xyz/;</p>
<h1 class="c8 c27" id="h.ht69pgqj67ae"></h1>
<h2>Language of Regular Expression</h2>
<ul>
    <li>The language of regular expression consists of following:<br>1) Character Classes (Brackets)<br>2) Metacharacters
        <br>3) Quantifiers</li>
</ul>
<p></p>
<h3>1) Character Classes (Brackets)</h3>
<ul>
    <li>You can group characters by putting them in Square brackets.</li>
    <li>Brackets are used to find a range of characters.</li>
    <li>[&hellip;] matches any one of the characters between the brackets</li>
    <li>[^&hellip;] matches any one character, but not one of those inside the brackets</li>
    <li>(x|y) matches any of the alternatives specified.</li>
</ul>
<p></p>
<p><img alt="" src="images/image2.png" title=""></p>
<p></p>
<h3>2) Metacharacters</h3>
<ul>
    <li>Metacharacters are characters with a special meaning within the language of regular expression.</li>
</ul>
<p></p>
<p><img alt="" src="images/image3.png" title=""></p>
<p></p>
<h3>3) Quantifiers</h3>
<ul>
    <li>Quantifiers match a number of instances of a character, group, or character class in a string.</li>
    <li>The following table list the quantifiers:</li>
</ul>
<p></p>
<p><img alt="" src="images/image6.png" title=""></p>
<p></p>
<h2>RegExp class functions:</h2>
<p>Here is a list of the methods associated with RegExp along with their description.</p>
<p></p>
<h3>1)&nbsp;exec( ) method</h3>
<ul>
    <li>The exec method searches string for text that matches regexp. If it finds a match, it returns an array of results; otherwise, it returns null.</li>
    <li>Syntax</li>
</ul>
<p>RegExpObject.exec( string );</p>
<ul>
    <li>It returns the matched text if a match is found, and null if not.</li>
</ul>
<h3>2)&nbsp;test( ) method</h3>
<ul>
    <li>The test method searches string for text that matches regexp. If it finds a match, it returns true; otherwise, it returns false.</li>
    <li>Syntax</li>
</ul>
<p>RegExpObject.test( string );</p>
<ul>
    <li>It returns the matched text if a match is found, and null if not.</li>
</ul>
<p></p>
<h2>String class functions:</h2>
<p></p>
<h3>1)&nbsp;match(pattern)</h3>
<p>Searches for a matching pattern. Returns an array holding the results, or null if no match is found</p>
<p></p>
<h3>2)&nbsp;replace(pattern1, pattern2)</h3>
<p>Searches for pattern1. If the search is successful pattern1 is replaced with pattern2</p>
<p></p>
<h3>3)&nbsp;search(pattern)</h3>
<p>Searches for pattern in the string. If the match is successful,&nbsp;the index of the start of the match is returned. If the search fails, the function returns -1.</p>
<h1 class="c8 c27" id="h.ma9mtp4auilg"></h1>
<h2>Sample Programs</h2>
<p></p>
<h3>1) Write a JavaScript to test if string contains the letter &lsquo;a&rsquo; or &lsquo;c&rsquo; or both.</h3>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;script language=&quot;javascript&quot;&gt;</p>
<p>var input = prompt(&#39;Enter some text&#39;)</p>
<p>re = /[ac]/</p>
<p>if(re.test(input)) &nbsp;{</p>
<p>&nbsp;alert(&#39;The string contains letter a or c or both&#39;)</p>
<p>}</p>
<p>else &nbsp;{</p>
<p>&nbsp;alert(&#39;String does not contain a or c or both&#39;)</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image5.png" title=""></p>
<p></p>
<h3>2) &nbsp;Develop a program to check for valid email id entered by user.</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Check Email ID&lt;/title&gt;</p>
<p>&lt;script&gt;</p>
<p>&nbsp;function checkEmail()</p>
<p>&nbsp;{</p>
<p>&nbsp; var email = document.getElementById(&#39;email&#39;).value</p>
<p>&nbsp; var regex = /^([a-zA-Z0-9_\.]+)@([a-zA-Z0-9_\.]+)\.([a-zA-Z]{2,5})$/</p>
<p>&nbsp; var res = regex.test(email)</p>
<p>&nbsp;</p>
<p>&nbsp; if(!res) {</p>
<p>&nbsp; &nbsp;alert(&#39;Please enter valid email id&#39;)</p>
<p>&nbsp; }</p>
<p>&nbsp; else &nbsp;{</p>
<p>&nbsp; &nbsp;alert(&#39;Thank you&#39;)</p>
<p>&nbsp; }</p>
<p>&nbsp;}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;form name=&quot;myform&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;</p>
<p>Enter Email ID &lt;input type=&quot;text&quot; id=&quot;email&quot; /&gt;&lt;br/&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Submit&quot; onclick=&quot;checkEmail()&quot;/&gt;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
<p><img alt="" src="images/image1.png" title=""></p>
<p></p>
<h3>3) Write a webpage that accepts Username and adharcard as input texts. When the user enters adhaarcard number ,the JavaScript validates card number and diplays whether card number is valid or not. (Assume valid adhaar card format to be nnnn.nnnn.nnnn or nnnn-nnnn-nnnn).</h3>
<p></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;script&gt;</p>
<p>function check()</p>
<p>{</p>
<p>&nbsp;var card_no = document.getElementById(&#39;card_no&#39;).value</p>
<p>&nbsp;var re1 = /\d{4}\.\d{4}\.\d{4}/</p>
<p>&nbsp;var re2 = /\d{4}\-\d{4}\-\d{4}/</p>
<p></p>
<p>&nbsp;var res = re1.test(card_no) || re2.test(card_no)</p>
<p>&nbsp;if(res)</p>
<p>&nbsp; alert(&#39;Valid format&#39;)</p>
<p>&nbsp;else</p>
<p>&nbsp; alert(&#39;Invalid format&#39;) &nbsp;</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>Enter AADHAR card no. &lt;input type=&quot;text&quot; id=&quot;card_no&quot;/&gt;&lt;br&gt;</p>
<p>&lt;input type=&quot;button&quot; value=&quot;Submit&quot; onclick=&quot;check()&quot;/&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p></p>
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