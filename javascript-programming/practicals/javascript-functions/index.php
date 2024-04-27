<?php 
require("../../../libs/config.php");
$title = "Develop JavaScript to implement functions | ".SITE_NAME;
$description = "Develop JavaScript to implement functions";
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
<h1>Develop JavaScript to implement functions</h1>
<h2>Laboratory Objective:</h2>
<ol>
    <li>To be able to understand the concept of functions.</li>
    <li>To develop JavaScript to implement the given function.</li>
    <li>To develop JavaScript to calling function from HTML.</li>
    <li>To be develop JavaScript to returning a value from a function.</li>
</ol>
<?php 
  include($_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/banner-ads.php");
?>
<h2>JavaScript Functions</h2>
<ul>
    <li>A function is block of code designed to perform a particular task.</li>
    <li>It is reusable code which can be called anywhere in program.</li>
    <li>There are two types of functions:<br>1) Built-in functions<br>2) User-defined functions</li>
</ul>
<h2>Defining a function</h2>
<ul>
    <li>A JavaScript function&nbsp;is defined with the function keyword, followed by a name, followed by parentheses ().
    </li>
    <li>Function names can contain letters, digits, underscores, and dollar signs (same rules as variables).</li>
    <li>The parentheses may include parameter names separated by commas: (parameter1, parameter2, &hellip;)</li>
    <li>It is recommended that the function should define in &lt;head&gt; tag.</li>
    <li>A function definition consists of four parts:<br>1) Function name<br>2) Parenthesis<br>3) Code block<br>4) Return statement (Optional)</li>
    <li>Syntax:</li>
</ul>
<p>function &nbsp;functionName([arg1, arg2, ...argN])</p>
<p>{</p>
<p>&nbsp;// code to be executed</p>
<p>&nbsp;return val;</p>
<p>}</p>
<ul>
    <li>Example:</li>
</ul>
<p>function cube(a)</p>
<p>{</p>
<p>&nbsp; &nbsp;document.write(a*a*a);</p>
<p>}</p>
<h2>Function without arguments</h2>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt; </p>
<p>&nbsp; &nbsp; &nbsp;function msg()</p>
<p>&nbsp; &nbsp; &nbsp;{ </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(&quot;Hi, Welcome to JavaScript&quot;); </p>
<p>&nbsp; &nbsp; &nbsp;} </p>
<p>&nbsp; &lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;input type=&quot;button&quot; onclick=&quot;msg()&quot; value=&quot;Call Function&quot;/&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<h2>Function with arguments</h2>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt; </p>
<p>&nbsp; &nbsp; &nbsp;function cube(num)</p>
<p>&nbsp; &nbsp; &nbsp;{ </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;alert(num*num*num); </p>
<p>&nbsp; &nbsp; &nbsp;} </p>
<p>&nbsp; &lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;input type=&quot;button&quot; onclick=&quot;cube(4)&quot; value=&quot;Find Square&quot;/&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<h2>Function with a return value</h2>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;script&gt; </p>
<p>&nbsp; &nbsp; &nbsp;function getSquare(s)</p>
<p>&nbsp; &nbsp; &nbsp;{</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return s * s;</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &nbsp; &nbsp;document.write(getSquare(9));</p>
<p>&nbsp; &nbsp; &nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p></p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<h2>Sample Programs</h2>
<h3>1) Develop a program to create a function sum which takes two parameters as number and display the addition numbers provided</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp;&lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;function sum(val1, val2) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;var result = val1 + val2;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;document.write(result + &quot;&lt;br/&gt;&quot;);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp; &nbsp;&lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;sum(23, 19);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;sum(32, 56);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;sum(12, 52);</p>
<p>&nbsp; &nbsp;&lt;/script&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img alt="" src="images/image2.png" title=""></p>
<h3>2) Develop a program to convert temperature from Celsius to Fahrenheit by returning value from function.</h3>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &nbsp;&lt;script&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;function toFahrenheit(celsius) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return (celsius * 9/5 + 32);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;document.write(&quot;Temperature in Fahrenheit is &quot; +</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;toFahrenheit(45));</p>
<p>&nbsp; &nbsp;&lt;/script&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p><img src="images/image1.png" alt="" title=""></p>
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